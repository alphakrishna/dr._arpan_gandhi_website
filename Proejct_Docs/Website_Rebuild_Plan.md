# Dr. Arpan Gandhi — Website Rebuild Plan

> **Go-live deadline:** June 30 (Phase 2)
> **Local preview:** `python -m http.server 8080` → `http://localhost:8080`
> **Tone:** Happy · Confident · Credible · Intelligent

---

## Site Map

| Page | URL | Purpose | Status |
|------|-----|---------|--------|
| Landing | `/` | Funnel — hook → credibility → convert | In progress |
| Journey | `/journey.html` | Full career story with photos | ✅ Done |
| Profile | `/profile.html` | Who he is in depth | Built, unverified |
| Consulting | `/consulting.html` | Services detail | To build |
| Academic | `/academic.html` | Mentorship + collaboration form | To build |
| Blog | `/blog/` | Thought leadership (3 posts) | Existing |

---

## Landing Page — Funnel Structure

```
HERO          → Who am I?         (name · tagline · photo · 2 lines)
TICKER        → Quick proof       (scrolling achievements) ✅
WHAT I DO     → What do I do?     (3 cards → dedicated pages)
LINKEDIN      → Why trust me?     (3 posts visible in one view)
HOW I HELP    → How can I help?   (short paragraph + 1 CTA)
CONTACT       → Convert           (clean form — name · email · message)
```

---

## Milestone 1 — Inner Pages Complete

---

### Step 1 — Ticker ✅

- [x] Ticker strip added to `index.html` below hero
- [x] 7 items: 29+ Years · SRL & Agilus · 200+ Mentored · 4 M&A · COVID Labs · CAP Auditor · NABL
- [x] CSS animation scrolls left continuously
- [x] Animation pauses on hover / touch hold
- [x] Seamless loop (items duplicated, -50% translate)
- [x] `-webkit-` prefixes for iOS/Android Safari

**Verify:**
- [x] Ticker visible below hero on homepage
- [x] Items scroll smoothly
- [x] Hover — pauses; release — resumes
- [x] Mobile — scrolling (not static)

---

### Step 2 — `/journey.html` ✅

- [x] File created with nav/footer shell
- [x] Title = "My Journey — Dr. Arpan Gandhi"
- [x] Meta description under 160 characters
- [x] Exactly one `<h1>`
- [x] 5 milestone sections with photos (alternating layout)
- [x] SRL Diagnostics and Agilus Diagnostics named
- [x] "Leverage this experience for" bullet list
- [x] Future of Diagnostics closing section
- [x] Floating back-home arrow button (fixed position)

**Verify:**
- [x] Page loads with nav and footer
- [x] Tab title reads "My Journey — Dr. Arpan Gandhi"
- [x] All 5 milestones visible with photos
- [x] SRL and Agilus named by name
- [x] Leverage section at the bottom
- [x] Click HOME in nav — returns to homepage

---

### Step 3 — `/profile.html`

- [x] File created with nav/footer shell
- [x] Title = "Professional Profile — Dr. Arpan Gandhi"
- [x] Meta description under 160 characters
- [x] Exactly one `<h1>`
- [x] About narrative — 2 paragraphs
- [x] Why Work With Me section
- [x] 6 Selected Highlights
- [x] 6 Areas of Focus cards with pastel backgrounds
- [x] Board & Advisory philosophy block
- [x] Looking Ahead paragraph
- [x] Executive Portfolio link (opens Google Doc)

**Verify:**
- [x] Open `/profile.html` — page loads
- [x] Tab title reads "Professional Profile — Dr. Arpan Gandhi"
- [x] Scroll — 6 focus cards visible with colour backgrounds
- [x] Click "Executive Portfolio" — Google Doc opens in new tab
- [x] On mobile — cards stack in single column

---

### Step 4 — `/consulting.html`

- [x] File created with nav/footer shell
- [x] Title = "Diagnostics Consulting — Dr. Arpan Gandhi"
- [x] Meta description under 160 characters
- [x] Exactly one `<h1>`
- [x] Intro — 2–3 paragraphs
- [x] Service area: Laboratory Strategy & Growth (with bullets)
- [x] Service area: Laboratory Operations & Performance Improvement (with bullets)
- [x] Service area: Quality Systems & Accreditation — NABL · CAP · CAPA · SOPs (with bullets)
- [x] Service area: Laboratory Setup & Expansion (with bullets)
- [x] Service area: Diagnostic Transformation & Future Readiness (with bullets)
- [x] Who I Work With — 4 client types
- [x] Consulting philosophy paragraph
- [x] CTA button → `/#contact`

**Verify:**
- [ ] Open `/consulting.html` — page loads
- [ ] Tab title reads "Diagnostics Consulting — Dr. Arpan Gandhi"
- [ ] Scroll — all 5 service headings visible
- [ ] "NABL", "CAP", "CAPA" visible
- [ ] Click CTA button — lands on homepage contact section

---

### Step 5 — `/academic.html`

- [x] File created with nav/footer shell
- [x] Title = "Academic & Collaboration — Dr. Arpan Gandhi"
- [x] Meta description under 160 characters
- [x] Exactly one `<h1>`
- [x] Mentorship section — "200+" mentioned
- [x] Research & Innovation section
- [x] Board & Advisory intro section
- [x] Collaboration form: Name · Email · Organisation · Area of Interest · Message
- [ ] Form action → Formspree endpoint *(blocked — see below)*

**Verify:**
- [ ] Open `/academic.html` — page loads
- [ ] Tab title reads "Academic & Collaboration — Dr. Arpan Gandhi"
- [ ] "200+" visible in mentorship section
- [ ] Fill form and submit — "Sent!" appears
- [ ] Check inbox — message arrived

---

## Milestone 2 — Landing Page Funnel

---

### Step 6 — Hero Update

- [x] Tagline kept as-is (confirmed by client)
- [x] Hero photo and blob backdrop intact
- [x] 2-line descriptor — no more than 2 lines

**Verify:**
- [x] Open `/` — hero loads with updated tagline
- [x] Photo and green blob visible
- [ ] No text overflow on mobile

---

### Step 7 — What I Do (3 Cards)

- [ ] Reduced from 6 cards to 3 cards
- [ ] Card 1: Diagnostics Consulting → `/consulting.html`
- [ ] Card 2: Academic & Mentorship → `/academic.html`
- [ ] Card 3: Advisory & Strategy → `/profile.html`
- [ ] Each card: title + 1-line description + arrow link

**Verify:**
- [ ] Only 3 cards visible
- [ ] Click each — lands on correct page
- [ ] On mobile — cards stack vertically

---

### Step 8 — LinkedIn Credibility Strip ✅

- [x] 3 LinkedIn post URLs confirmed from Dr. Gandhi
- [x] 3 post cards visible in one viewport on desktop
- [x] Each card: excerpt (2–3 lines) + "View on LinkedIn →" link
- [x] Cards link to correct posts in new tab
- [x] On mobile — cards stack vertically

**Verify:**
- [x] 3 cards visible side by side on desktop
- [x] Click each link — correct post opens on LinkedIn
- [x] On mobile — cards stack cleanly

---

### Step 9 — How Can I Help + Contact

- [x] "How Can I Help" paragraph (3–4 lines) + 1 CTA button
- [x] Contact section: Name · Email · Message · Send button
- [ ] Formspree endpoint confirmed *(blocked — see below)*
- [x] Email · Phone · LinkedIn direct links visible

**Verify:**
- [ ] Section visible below LinkedIn strip
- [ ] Fill and submit form — "Sent!" appears
- [ ] Email and LinkedIn links open correctly

---

## Milestone 3 — Polish & Deploy

---

### Step 10 — Nav Update (all pages)

- [ ] `index.html` nav updated
- [ ] `profile.html` nav updated
- [ ] `journey.html` nav updated
- [ ] `consulting.html` nav updated
- [ ] `academic.html` nav updated
- [ ] `blog/index.html` nav updated
- [ ] `blog/labs-need-leaders.html` nav updated
- [ ] `blog/career-pathways-laboratory-medicine.html` nav updated
- [ ] `blog/diagnostic-networks-india.html` nav updated
- [ ] Nav order: HOME · CONSULTING · JOURNEY · PROFILE · ACADEMIC · BLOG · CONTACT
- [ ] No broken `/#about` or `/#journey` anchors remaining

**Verify:**
- [ ] Open each page — nav shows all links
- [ ] On mobile — hamburger opens, all links show, closes after tap

---

### Step 11 — SEO + Google Analytics

- [ ] Every page has a unique `<title>`
- [ ] Every page has `<meta name="description">` under 160 characters
- [ ] Every page has exactly one `<h1>`
- [ ] All `<img>` tags have descriptive `alt` text
- [ ] `sitemap.xml` updated with all page URLs
- [ ] Google Analytics tag in every page `<head>`

**Verify:**
- [ ] Browser tab on each page — all titles unique
- [ ] View source — search `G-` — GA tag present

---

### Step 12 — Final Handoff + Deploy

- [ ] Upload all files to GoDaddy
- [ ] Site opens at `https://drarpangandhi.org/`
- [ ] SSL padlock visible

**Verify:**
- [ ] Open every page on a real phone
- [ ] Submit collaboration form — arrives in inbox
- [ ] Click every external link — opens in new tab
- [ ] F12 on each page — no red console errors

---

## Blocked — Waiting on Dr. Gandhi

| Item | Blocks |
|------|--------|
| Formspree endpoint (replace `xcontact`) | Step 5 + Step 9 |
| 3 LinkedIn post URLs | Step 8 |
| Nav label — "PROFILE" or "ABOUT"? | Step 10 |
