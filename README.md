# 🧪 Dynamic Web Lab — Advanced WP & Vibe Coder Technical Trial

Welcome. This isn’t a syntax quiz. We’re testing how you **orchestrate AI, architect WordPress/Elementor solutions, and ship US-market-ready features** under realistic constraints.

---

## 🎯 Objective
Build a lightweight custom WordPress plugin containing a **dynamic Elementor pricing table widget** that:
- Fetches data from a public JSON endpoint
- Highlights a configurable “popular” plan
- Provides Elementor panel controls (title, currency, cache TTL, etc.)
- Renders responsively, accessibly, and performance-optimized
- Follows WordPress & Elementor coding standards

---

## ⏱️ Format & Timeline
- **Estimated effort:** 4–6 hours (focus on architecture & polish, not over-engineering)
- **Submission window:** 48 hours from when you clone this repo
- **AI Usage:** Mandatory. We want to see how you prompt, iterate, debug, and QA with AI tools.
- **Workstyle:** Async. Work at your peak hours. We care about output quality, not timezone.

---

## 🛠️ Step-by-Step Instructions

### 1. Setup
- Fork/clone this repo
- Work inside the `starter-plugin/` directory
- Keep commit history incremental (no single `final commit` dumps)

### 2. Build the Widget
- Extend `includes/class-widget.php` using Elementor’s widget structure (`_register_controls()`, `render()`)
- Fetch JSON via `wp_remote_get()` or `fetch()` (your choice, but justify it)
- Implement Elementor controls for: title toggle, currency symbol, popular plan index, cache duration
- Enqueue CSS/JS properly via `wp_enqueue_*`. No inline styles or render-blocking scripts.
- Sanitize & escape all output (`esc_html()`, `wp_kses_post()`, `sanitize_text_field()`, etc.)

### 3. AI-First Workflow
- Use Cursor, Windsurf, Copilot, or your preferred AI IDE + LLM
- Prompt strategically: scaffold → refactor → debug → generate tests
- **Document every prompt chain, what worked, what failed, and how you fixed it** (see `AI_WORKFLOW.md`)

### 4. Performance & QA
- Run Lighthouse / GTmetrix. Target: **Performance ≥85, Accessibility ≥90**
- Implement basic caching (transients or custom cache key based on TTL)
- Write **one automated test** (PHPUnit for PHP logic OR Playwright/Cypress for frontend)
- Log before/after scores & fixes in `PERFORMANCE.md`

### 5. Record & Submit
- Record a **3-minute Loom** walking through:
  - Architecture decisions
  - Where AI helped vs where you intervened manually
  - One bug you caught & fixed
  - Why this is ready for a US enterprise client
- Push to a **public GitHub repo**
- Submit via the official form (link below)

---

## 📜 Rules & AI Policy

✅ **AI is required.** We don’t hire developers who ignore modern tooling.  
⚠️ **AI is not a substitute for understanding.** You will be asked to explain any line of code.  
📝 **Prompt logs are graded.** We want to see iteration, failure handling, and manual overrides.  
🔒 **Security is non-negotiable.** Unescaped output, hardcoded secrets, or missing validation = automatic fail.  
⏱️ **Respect the timebox.** Over-engineering a test task signals poor scoping ability.  
🌍 **US-client ready.** Fast loading, mobile-first, accessible, and clean UI/UX.

---

## 📦 Deliverables Checklist

Before submitting, ensure your repo contains:
- [ ] `starter-plugin/` with fully functional custom Elementor widget
- [ ] `AI_WORKFLOW.md` (markdown table of prompts, tools, successes, failures)
- [ ] `PERFORMANCE.md` (Lighthouse scores, optimization steps, caching strategy)
- [ ] `README.md` (installation & usage instructions for local WP)
- [ ] Clean, incremental git commit history
- [ ] 3-min Loom walkthrough link
- [ ] Completed submission form

---

## 📊 Evaluation Rubric (100 Points)

| Criteria | Weight | What We Grade |
|----------|--------|---------------|
| **WP/Elementor Architecture** | 25 | Proper hooks, widget structure, asset loading, escaping/sanitization, Elementor Canvas compatibility |
| **AI Workflow Maturity** | 20 | Strategic prompting, iterative refinement, knows AI limits, logs failures & pivots |
| **Performance, Security & QA** | 20 | Lighthouse targets met, caching strategy, automated test, security basics |
| **Code Quality & Polish** | 15 | WP/Elementor standards, responsive, accessible, clean git history, no bloat |
| **Communication & “Vibe”** | 20 | Loom clarity, US-client readiness, speed vs quality balance, self-awareness |

🟢 **Pass:** ≥75 + strong AI log + clean Loom → Invited to 1-month remote trial  
🟡 **Review:** 60–74 → May be invited to a 15-min live “Vibe Debug” session  
🔴 **Reject:** <60, copied/AI-dumped without understanding, or missing deliverables

---

## 🚀 How to Submit

1. Push your completed repo to a **public GitHub URL**
2. Record your **3-min Loom walkthrough**
3. Fill out the submission form: `[LINK TO YOUR TALLY/GOOGLE FORM]`
4. Wait for review. We respond within **5 business days**.

---

## ❓ FAQ & Next Steps

**Q: What if I get stuck?**  
A: Use AI, check official docs (`developer.wordpress.org`, `developers.elementor.com`), and document the blocker. We grade problem-solving, not perfection.

**Q: Can I use third-party libraries?**  
A: Only if lightweight, properly enqueued, and justified. No heavy frameworks for a simple widget.

**Q: What happens after submission?**  
A: Top scorers receive a 15-min live screen-share debug call. Finalists get a 1-month remote trial → full-time in-office offer (Narsingdi).

**Q: Is this work commercialized?**  
A: No. This is a screening task only. All code remains yours. We never reuse or sell applicant submissions.

---

## 📝 Disclaimer
This technical trial is a screening exercise for employment consideration. Dynamic Web Lab does not claim ownership of your code. By submitting, you confirm the work is your own (AI-assisted is expected and encouraged) and that you’re open to a remote trial transitioning to an in-office role in Narsingdi, Bangladesh.

---

🔥 **Show us your vibe. Ship fast. Explain clearly. We’ll handle the rest.**
