---
name: Pending — move deployable assets into a `public/` folder at project root
description: Open structural cleanup; raise it next time the user touches project layout or asks about organization
type: project
originSessionId: b2589e48-4355-4a9a-a5f5-ebb3e21a0251
---
Currently every deployable file lives at the project root (`index.html`, `main.js`, `css/`, `contact.php`, `.env`, `.htaccess`, etc.). The user wants these moved into a `public/` directory at the project root, so the root contains only repo/project metadata and `public/` is the artifact uploaded to Hostinger.

**Why:** Cleaner separation between project metadata (git, future docs, scripts) and the actual deployed surface. Mentioned 2026-05-08 alongside the `responsive.css` follow-up — same overall maintainability/organization pass.

**How to apply:** When implementing, move `index.html`, `main.js`, `css/`, `contact.php`, `.env`, `.env.example`, `.htaccess` (and any future static assets) into `public/`. The internal references (`<link href="css/...">`, `fetch('/contact.php')`, `__DIR__ . '/.env'` in PHP) all stay relative and keep working — nothing in the code needs to change. Update the deploy instructions: upload the **contents** of `public/` to Hostinger's `public_html/`, not the `public/` folder itself.
