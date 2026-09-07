param(
  [string]$ProjectRoot = (Split-Path -Parent $PSScriptRoot)
)

$ErrorActionPreference = 'Stop'

function Encode-Html([string]$Value) {
  return [System.Net.WebUtility]::HtmlEncode($Value)
}

$dataPath = Join-Path $ProjectRoot 'blog\posts.json'
$homepagePath = Join-Path $ProjectRoot 'index.html'
$posts = Get-Content -Raw -Encoding utf8 $dataPath | ConvertFrom-Json | Sort-Object dateIso -Descending

$cards = foreach ($post in $posts) {
  $wrapClass = 'blog-card-img-wrap'
  if ($post.fullBanner) { $wrapClass += ' blog-card-img-wrap--full-banner' }

@"
              <a href="$(Encode-Html $post.url)" class="blog-card">
                <div class="$wrapClass">
                  <img src="$(Encode-Html $post.image)" alt="$(Encode-Html $post.alt)" loading="lazy" />
                </div>
                <div class="blog-card-body">
                  <span class="blog-card-tag">$(Encode-Html $post.tag)</span>
                  <h3 class="blog-card-title">$(Encode-Html $post.title)</h3>
                  <p class="blog-card-excerpt">$(Encode-Html $post.excerpt)</p>
                  <div class="blog-card-footer">
                    <span class="blog-card-date">$(Encode-Html $post.date)</span>
                    <span class="blog-card-link">Read more &#8594;</span>
                  </div>
                </div>
              </a>
"@
}

$homepage = Get-Content -Raw -Encoding utf8 $homepagePath
$pattern = '(?s)(<!-- BLOG_CARDS_START -->).*?(<!-- BLOG_CARDS_END -->)'
$matches = [regex]::Matches($homepage, $pattern)
if ($matches.Count -ne 1) {
  throw "Expected exactly one Latest Writing card block in index.html; found $($matches.Count)."
}

$renderedCards = $cards -join "`r`n"
$updatedHomepage = [regex]::Replace($homepage, $pattern, {
  param($match)
  "$($match.Groups[1].Value)`r`n$renderedCards`r`n              $($match.Groups[2].Value)"
}, 1)

$updatedHomepage = [regex]::Replace($updatedHomepage, '(\r?\n){2,}\z', [Environment]::NewLine)
[System.IO.File]::WriteAllText($homepagePath, $updatedHomepage, [System.Text.UTF8Encoding]::new($false))
Write-Output "Updated $($posts.Count) Latest Writing cards in index.html."
