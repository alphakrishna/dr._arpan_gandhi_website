# Dr. Arpan Gandhi — Personal Website

## Project Brief

A personal portfolio and thought-leadership website for **Dr. Arpan Gandhi**, a senior diagnostic medicine professional and healthcare strategist based in India. The site serves as his professional presence on the web — showcasing his career journey, areas of expertise, and published writing.

**Client:** Dr. Arpan Gandhi
**Type:** Static HTML/CSS/JS website (no build tool, no framework)
**Deployed as:** Static site (served from root, paths use `/` absolute references)
**Go-live deadline:** June 30, 2026

### Who Dr. Arpan Gandhi Is
- 29+ years in diagnostic medicine, healthcare leadership, and medical education
- Previously at **SRL Diagnostics** and **Agilus Diagnostics**
- Specializes in ocular pathology, oncology, and advanced diagnostic medicine
- Has mentored 200+ residents and medical professionals
- Led M&A of four regional diagnostic centers in tier 2/3 Indian cities
- Set up COVID-19 RT-PCR labs during the pandemic
- CAP Internal Auditor since 1999 · NABL Quality Systems expert

---

## Personality & Tone

Every section, every word, every design choice should feel:

> **Happy · Confident · Credible · Intelligent**

Not corporate. Not cold. Not a PowerPoint. Warm, authoritative, human.

---

## Site Structure

```
/                        → index.html           (landing page — funnel)
/journey.html            → career story with photos
/profile.html            → professional profile & focus areas
/consulting.html         → diagnostics consulting services
/academic.html           → mentorship, research & collaboration form
/blog/                   → blog/index.html      (listing page)
/blog/<slug>.html        → individual blog posts
/404.html                → custom 404 page
/css/style.css           → single global stylesheet
/js/main.js              → single global JS file
/images/                 → all images
/robots.txt
/sitemap.xml
```

### Blog Posts (under `/blog/`)
- `labs-need-leaders.html`
- `career-pathways-laboratory-medicine.html`
- `diagnostic-networks-india.html`

---

## Landing Page — Funnel Design

The homepage is a **conversion funnel**, not a brochure. Each section answers one question and passes the reader to the next. Do not add sections that don't serve the funnel.

```
HERO          → Who am I?         name · tagline · photo · 2 lines max
TICKER        → Quick proof       scrolling achievements (built ✅)
WHAT I DO     → What do I do?     3 cards only — each links to a dedicated page
LINKEDIN      → Why trust me?     3 LinkedIn posts visible in one view, no scroll
HOW I HELP    → How can I help?   3–4 line paragraph + 1 CTA button
CONTACT       → Convert           name · email · message · send
```

**Rules for the landing page:**
- No section should require scrolling to see its core message
- Max 3 cards in "What I Do" — no more
- LinkedIn strip: all 3 posts must be visible at once on desktop
- Contact form: 3 fields only (Name, Email, Message)
- No About section on landing page — that detail lives on `/profile.html`
- No full journey timeline on landing page — that lives on `/journey.html`

### Landing Page Section IDs
| Section | ID |
|---------|----|
| Hero | (top) |
| Ticker | `.ticker` |
| What I Do | `#services` |
| LinkedIn Strip | `#linkedin` |
| How Can I Help | `#help` |
| Contact | `#contact` |

---

## Inner Pages

Each inner page has:
- Same nav and footer as the landing page
- A floating back-home arrow button (fixed, top-left, no background — just arrow icon)
- `class="page-{name}"` on `<body>` for page-specific CSS targeting
- `<h1>` exactly once per page

| Page | Body class | Back button |
|------|-----------|-------------|
| journey.html | `page-journey` | ✅ present |
| profile.html | — | add |
| consulting.html | — | add |
| academic.html | — | add |

---

## Layout Reference

**Primary layout inspiration:** https://www.youtube.com/watch?v=g0db5kA4BfQ

Key principles taken from this reference:
- Sections feel continuous — not like separate slides
- Whitespace is used intentionally, not to fill space
- Each section has one job and one visual focus
- Typography does most of the heavy lifting
- Photography is editorial, not decorative

**Also referenced:** https://www.pratibhajoshi.com/ — minimal personal site, hooks on landing, detail on inner pages.

---

## Tech Stack

| Layer | Choice |
|-------|--------|
| Markup | Vanilla HTML5 |
| Styling | Vanilla CSS (single `css/style.css`, no preprocessor) |
| Scripting | Vanilla JS ES6 (`js/main.js`, no bundler) |
| Fonts | Google Fonts — Playfair Display (headings), Open Sans (body), DM Sans (nav) |
| Contact form | Formspree (`https://formspree.io/f/xcontact`) — endpoint TBC |
| Icons | Inline SVG (Heroicons style) |

**No npm, no build step, no framework.** All files are edited directly.

---

## Design Tokens (CSS Custom Properties in `style.css`)

```css
/* Accent palette — healing green system */
--accent: #40916c;          /* Healing Green — primary */
--accent-light: #74c69d;    /* lighter healing green */
--accent-teal: #1b8882;     /* Trustworthy Teal — ticker dots only */

/* Fonts */
--font-heading: 'Playfair Display', Georgia, serif
--font-body:    'Open Sans', Arial, sans-serif
--font-nav:     'DM Sans', sans-serif

/* Pastel card backgrounds */
--pastel-blue, --pastel-pink, --pastel-yellow,
--pastel-green, --pastel-purple, --pastel-orange

/* Greyscale slate scale */
--slate-100 through --slate-900
```

Always use these tokens — never hardcode colours or fonts.

### Section Backgrounds
| Section | Background |
|---------|-----------|
| Hero | `linear-gradient(150deg, #e8f4ee 0%, #e9f3f9 50%, #ffffff 80%)` |
| Services | `#f7f8f6` |
| Journey teaser | `linear-gradient(140deg, #f2ede6 0%, #eae8e1 100%)` |
| Contact | `#fafaf9` |
| Inner pages | White with subtle gradient header on `page-journey` |

### Hero Photo Treatment
- Organic green blob backdrop (`.hero-photo-accent`) — healing green gradient, asymmetric border-radius
- Blue radial glow bottom-left (`.hero-photo-wrapper::before`)
- Teal dot grid bottom-right (`.hero-photo-wrapper::after`)
- Photo: `filter: brightness(0.96) contrast(1.02) saturate(0.88)` — no grayscale

---

## Conventions

- **Absolute paths** for all assets: `/images/...`, `/css/style.css`, `/js/main.js`
- **No JavaScript frameworks** — plain DOM APIs in `main.js` only
- **Single stylesheet** — all styles in `css/style.css`, organized with `/* ===== SECTION ===== */` comments
- **Semantic HTML** — `<section>`, `<article>`, `<nav>`, `<footer>`, `<main>`
- **Accessibility** — `aria-label` on icon-only buttons, `alt` on every `<img>`, `.sr-only` for hidden labels, `loading="lazy"` on below-fold images
- **No code comments** unless explaining a non-obvious constraint
- Inner page nav/footer shell: copy from `journey.html` (most up to date)

---

## Common Tasks

**Add a new inner page**
1. Copy nav/footer shell from `journey.html`
2. Update `<title>`, `<meta name="description">`, `<meta property="og:*">`
3. Add `class="page-{name}"` to `<body>`
4. Add floating back-home button before `</body>`
5. Add the page to `sitemap.xml`
6. Update nav on all existing pages (Step 10 in plan)

**Add a new blog post**
1. Duplicate `blog/labs-need-leaders.html`
2. Update title, description, og tags
3. Replace article body
4. Add card to `blog/index.html`
5. Add URL to `sitemap.xml`

**Update Formspree endpoint**
- Find `<form action="https://formspree.io/f/xcontact">` in `index.html` and `academic.html`
- Replace `xcontact` with the confirmed hash from Dr. Gandhi

**Change accent colour**
- Update `--accent` and `--accent-light` in `:root` at top of `css/style.css`

---

## Blocked — Waiting on Dr. Gandhi

| Item | Needed for |
|------|-----------|
| Formspree endpoint | Contact form + Academic form |
| 3 LinkedIn post URLs | LinkedIn credibility strip |
| Nav label — "PROFILE" or "ABOUT"? | Nav update pass |
