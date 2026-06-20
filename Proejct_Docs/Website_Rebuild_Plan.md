# Dr. Arpan Gandhi — Website Rebuild Checklist

> Last verified: 2026-06-20
> Today: June 20 · Phase 1 deadline: June 23–24 · Phase 2 deadline: June 30

---

## Milestone 1 — Phase 1 Deployment `due June 23–24` `4 days`

> Goal: A complete, live website on GoDaddy with all current content plus the achievements ticker. New dedicated pages come in Phase 2.

### Landing Page (`index.html`)
- [ ] D1: Achievements ticker strip added below hero
  - [ ] 7 items: `29+ Years` · `SRL & Agilus Diagnostics` · `200+ Mentored` · `4 M&A Integrations` · `COVID RT-PCR Labs` · `CAP Auditor since 1999` · `NABL Quality Systems`
  - [ ] Scrolls left continuously via CSS animation
  - [ ] Pauses on hover
  - [ ] Seamless loop — no visible gap or jump
  - [ ] Font size ≥ 14px on mobile
- [ ] Hero photo loads correctly
- [ ] All 6 service cards render and link correctly
- [ ] About section renders with Executive Portfolio link opening in new tab
- [ ] Journey timeline — all 5 milestones visible
- [ ] Contact form submits to Formspree without error
- [ ] Mobile hamburger menu opens and closes

### Blog
- [x] `/blog/` listing page works
- [x] All 3 blog posts open and render
- [x] Back link on each post returns to `/blog/`

### Cross-site
- [x] `robots.txt` present and allows indexing
- [ ] `sitemap.xml` includes all current URLs (index + blog listing + 3 posts)
- [ ] No broken links across all pages
- [ ] Site loads on mobile without horizontal scroll

### Deployment
- [ ] All files uploaded to GoDaddy hosting
- [ ] Site live at `https://drarpangandhi.org/`
- [ ] HTTPS working (SSL active)
- [ ] Hero image, about image, blog images all load on live URL

---

## Milestone 2 — Phase 2 Complete `due June 30` `10 days`

> Goal: New dedicated pages live, LinkedIn posts section added, SEO + Google Analytics in place, final polish done.

### New Pages (all 4 must be created)

#### `/journey.html` — My Journey
- [ ] File created with nav + footer shell
- [ ] `<title>` = "My Journey — Dr. Arpan Gandhi"
- [ ] `<meta name="description">` present and under 160 characters
- [ ] Exactly one `<h1>`
- [ ] Timeline — 5 milestones with SRL & Agilus named
- [ ] "Leverage this experience for" bullet list present
- [ ] Future of Diagnostics — closing reflection section present

#### `/profile.html` — Professional Profile
- [ ] File created with nav + footer shell
- [ ] `<title>` = "Professional Profile — Dr. Arpan Gandhi"
- [ ] `<meta name="description">` present and under 160 characters
- [ ] Exactly one `<h1>`
- [ ] About narrative (2 paragraphs from content doc)
- [ ] Why Work With Me section present
- [ ] Selected Highlights — 6 bullet points present
- [ ] 6 Areas of Focus displayed as cards (not a table)
- [ ] Board & Advisory philosophy block present
- [ ] Looking Ahead paragraph present
- [ ] Executive Portfolio link opens in new tab

#### `/consulting.html` — Diagnostics Consulting
- [ ] File created with nav + footer shell
- [ ] `<title>` = "Diagnostics Consulting — Dr. Arpan Gandhi"
- [ ] `<meta name="description">` present and under 160 characters
- [ ] Exactly one `<h1>`
- [ ] Intro (3 paragraphs) present
- [ ] 5 service areas each with heading + bullet list
  - [ ] Laboratory Strategy & Growth
  - [ ] Laboratory Operations & Performance Improvement
  - [ ] Quality Systems & Accreditation
  - [ ] Laboratory Setup & Expansion
  - [ ] Diagnostic Transformation & Future Readiness
- [ ] Quality Systems block (NABL, CAP, CAPA, SOPs listed)
- [ ] Lab Operations block (Common Challenges list included)
- [ ] Who I Work With — 4 client types present
- [ ] Consulting philosophy present
- [ ] CTA links to `/#contact`

#### `/academic.html` — Academic & Collaboration
- [ ] File created with nav + footer shell
- [ ] `<title>` = "Academic & Collaboration — Dr. Arpan Gandhi"
- [ ] `<meta name="description">` present and under 160 characters
- [ ] Exactly one `<h1>`
- [ ] Mentorship section (200+ professionals) present
- [ ] Research & Innovation section present
- [ ] Board & Advisory intro section present
- [ ] Collaboration form present and submits to Formspree
- [ ] Form fields: Name, Email, Organisation, Area of Interest (dropdown), Message

---

### Landing Page Restructure (`index.html`)
> Slim the landing page down once new pages exist to hold the detail.

- [ ] Hero tagline updated to: "Building Quality-Driven, Future-Ready Healthcare and Diagnostic Organizations"
- [ ] Services section reduced from 6 cards → 3 cards (Diagnostics Consulting · Board & Advisory · Healthcare Strategy)
- [ ] Each card links to its dedicated page — not `/#journey` or `/#about`
- [ ] Full About section removed — replaced with 1-line teaser + "Learn more →" to `/profile.html`
- [ ] Full Journey timeline removed — replaced with pull quote + "Read my story →" to `/journey.html`
- [ ] LinkedIn cards section added (see below)
- [ ] Contact section slimmed to email + LinkedIn + button only (full form removed to `/academic.html`)
- [ ] Final section order: Hero → Ticker → What I Do → Teaser → LinkedIn → Contact

### LinkedIn Posts Section (`index.html`)
- [ ] Section added with heading "Recent Thinking"
- [ ] 3 cards — each has: avatar, name, date, post excerpt (2–3 lines), "View on LinkedIn →" link
- [ ] Cards link to real LinkedIn post URLs *(blocked — needs 3 URLs from Dr. Gandhi)*
- [ ] Cards stack to single column on mobile
- [ ] No external JS dependency

---

### Nav Update — all 9 files
- [ ] `index.html`
- [ ] `profile.html`
- [ ] `journey.html`
- [ ] `consulting.html`
- [ ] `academic.html`
- [ ] `blog/index.html`
- [ ] `blog/labs-need-leaders.html`
- [ ] `blog/career-pathways-laboratory-medicine.html`
- [ ] `blog/diagnostic-networks-india.html`

Nav on every page must read: `HOME · PROFILE · CONSULTING · JOURNEY · ACADEMIC · BLOG · CONTACT`
- [ ] Desktop nav shows all 7 links
- [ ] Mobile hamburger shows all 7 links
- [ ] No broken `/#about` or `/#journey` anchors pointing to removed sections

---

### SEO + Google Analytics
- [ ] Every page has a unique `<title>`
- [ ] Every page has `<meta name="description">` under 160 characters
- [ ] Every page has exactly one `<h1>`
- [ ] No skipped heading levels (H1 → H2 → H3 only — never H1 → H3)
- [ ] All `<img>` tags have descriptive `alt` text
- [ ] Internal links wired: consulting ↔ profile ↔ journey
- [ ] `sitemap.xml` updated — all 7 page URLs included
- [ ] Google Analytics tracking snippet added to every page `<head>`

---

### Final Checks Before June 30 Handoff
- [ ] All pages tested on mobile (Chrome DevTools — iPhone SE + Pixel 5)
- [ ] All external links open in new tab with `rel="noopener noreferrer"`
- [ ] Contact form tested end-to-end (submission reaches inbox)
- [ ] LinkedIn card links verified to open correct posts
- [ ] No console errors on any page
- [ ] Site speed acceptable (images load under 3s on 4G)

---

## Blocked — Needs Dr. Gandhi

| Item | Blocks |
|------|--------|
| 3 LinkedIn post URLs | LinkedIn cards section |
| Profile page photo (same as hero.png or different?) | `/profile.html` |
| Nav label preference — "PROFILE" or "ABOUT"? | Nav update (all 9 files) |

---

## Content Source Map

| Page | Content from |
|------|-------------|
| `/` landing | Homepage › Hero + Areas of Focus (top 3) + Let's Connect |
| `/profile.html` | Homepage › About + Why Work With Me + Highlights + Areas of Focus + Looking Ahead; Board & Advisory › Philosophy |
| `/consulting.html` | Diagnostics Consulting (full); Quality Systems (full); Lab Operations (full) |
| `/journey.html` | Existing `index.html` journey section; Future of Diagnostics (full) |
| `/academic.html` | Board & Advisory Services (intro); CLAUDE.md mentorship facts |

> All content sourced from: `Proejct_Docs/DrGandhi_Professional_Website_Content.md`
