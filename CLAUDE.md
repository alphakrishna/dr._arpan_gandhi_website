# Dr. Arpan Gandhi — Personal Website

## Project Brief

A personal portfolio and thought-leadership website for **Dr. Arpan Gandhi**, a senior diagnostic medicine professional and healthcare strategist based in India. The site serves as his professional presence on the web — showcasing his career journey, areas of expertise, and published writing.

**Client:** Dr. Arpan Gandhi  
**Type:** Static HTML/CSS/JS website (no build tool, no framework)  
**Deployed as:** Static site (served from root, paths use `/` absolute references)

### Who Dr. Arpan Gandhi Is
- ~30 years in diagnostic medicine, healthcare leadership, and medical education
- Previously at **SRL Diagnostics** and **Agilus Diagnostics**
- Specializes in ocular pathology, oncology, and advanced diagnostic medicine
- Has mentored 200+ residents and medical professionals
- Led M&A of four regional diagnostic centers in tier 2/3 Indian cities
- Set up COVID-19 RT-PCR labs during the pandemic

---

## Site Structure

```
/                        → index.html          (main landing page)
/blog/                   → blog/index.html     (blog listing page)
/blog/<slug>.html        → individual blog posts
/404.html                → custom 404 page
/css/style.css           → single global stylesheet
/js/main.js              → single global JS file
/images/                 → all images (hero.png, about.png, logo.svg, blog/*, case-studies/*)
/robots.txt
/sitemap.xml
```

### Pages on the Landing Page (index.html — single-page sections)
| Section | ID / anchor |
|---------|-------------|
| Hero | (top of page) |
| Services / What I Do | `#services` |
| About | `#about` |
| Professional Journey | `#journey` |
| Contact | `#contact` |

### Blog Posts (under `/blog/`)
- `labs-need-leaders.html`
- `career-pathways-laboratory-medicine.html`
- `diagnostic-networks-india.html`

---

## Tech Stack

| Layer | Choice |
|-------|--------|
| Markup | Vanilla HTML5 |
| Styling | Vanilla CSS (single `css/style.css`, no preprocessor) |
| Scripting | Vanilla JS ES6 (`js/main.js`, no bundler) |
| Fonts | Google Fonts — Playfair Display (headings), Open Sans (body), DM Sans (nav) |
| Contact form | Formspree (`https://formspree.io/f/xcontact`) |
| Icons | Inline SVG (Heroicons style) |

**No npm, no build step, no framework.** All files are edited directly.

---

## Design Tokens (CSS Custom Properties in `style.css`)

```css
--accent: #e91e63          /* primary pink/rose accent */
--accent-light: #f06292

--font-heading: 'Playfair Display', Georgia, serif
--font-body:    'Open Sans', Arial, sans-serif
--font-nav:     'DM Sans', sans-serif

/* Pastel card backgrounds */
--pastel-blue, --pastel-pink, --pastel-yellow,
--pastel-green, --pastel-purple, --pastel-orange

/* Greyscale slate scale: slate-100 → slate-900 */
```

Always use these tokens — never hardcode colours or fonts in HTML or new CSS rules.

---

## Conventions

- **Absolute paths** for all assets: `/images/...`, `/css/style.css`, `/js/main.js`. The site is served from root.
- **No JavaScript frameworks** — keep interactivity in `main.js` using plain DOM APIs.
- **Single stylesheet** — all new styles go into `css/style.css`, organized with the existing section comments (`/* ===== NAV ===== */` pattern).
- **Semantic HTML** — use `<section>`, `<article>`, `<nav>`, `<footer>`, `<main>` appropriately.
- **Accessibility** — `aria-label` on icon-only buttons, `alt` text on every `<img>`, `.sr-only` class for visually hidden labels, `loading="lazy"` on below-fold images.
- **No comments in code** unless explaining a non-obvious constraint.
- Blog posts follow the same nav/footer shell as `blog/index.html` — copy that shell when adding a new post.

---

## Skills to Use While Developing

### `/run`
Use this to start a local dev server and preview the site in a browser. Verify UI changes before marking work done.

### `/verify`
Use after any HTML/CSS/JS change to confirm the feature works end-to-end in the real browser (not just by reading the diff).

### `/code-review`
Run before committing substantial changes — especially for new blog posts, new CSS sections, or JS additions — to catch correctness bugs and simplification opportunities.

### `/simplify`
Use after adding new CSS or JS to strip unnecessary complexity and keep the codebase lean.

### `/security-review`
Run if any change touches the contact form, external links, or any user-facing input handling.

---

## Common Tasks

**Add a new blog post**
1. Duplicate an existing post file (e.g. `blog/labs-need-leaders.html`).
2. Update the `<title>`, `<meta name="description">`, and `<meta property="og:*">` tags.
3. Replace the article body content.
4. Add a card for it in `blog/index.html`.
5. Add the URL to `sitemap.xml`.

**Update contact form endpoint**
- The Formspree endpoint lives in `index.html` at `<form action="...">`. Update the hash there.

**Add a new section to the landing page**
- Add the `<section id="new-id">` block in `index.html`.
- Add a matching `<li><a href="/#new-id">` in the nav (both desktop and mobile menus).
- Add the anchor to `sitemap.xml` if it's a primary destination.

**Change accent colour**
- Update `--accent` and `--accent-light` in the `:root` block at the top of `css/style.css`.
