# Starter Kit — Phase A

v1.0 | date: 2026-11-26

## Purpose

Single starter template forked per project (Phase A). Contains the Laravel scaffold per master §20, wires the `portfolio-theme` submodule (Phase 0.5) into Blade views, and sets up the QA harness (PHPUnit/Pest + Playwright).

## Contents

- `app/` — Laravel domain + HTTP layer
- `resources/views/` — Blade layouts + partials + pages (uses theme components)
- `resources/lang/` — fa/en/ar i18n stubs
- `config/theme.php` — reads `theme.config.json`, exposes tokens/nav/locales
- `database/` — migrations + seeders (empty templates)
- `tests/` — unit/feature/e2e/security scaffolding
- `docs/` — requirements/adr/contracts/runbooks/qa
- `.env.example` — no secrets committed
- `scripts/build.sh` — copies theme assets to `public/`

## How to fork per project

```bash
git clone <starter-repo> <project-name>
cd <project-name>
git submodule add https://github.com/rivassh/portfolio-theme.git packages/portfolio-theme
cp .env.example .env
composer install
./scripts/build.sh
php artisan serve
```

## Conventions (from master spec)

- Trilingual: fa/en/ar; RTL for fa/ar, LTR for en
- Hero gaze at physical top-right; no `inline-end`
- `theme.config.json` drives all theming (no code changes per site)
- `NOT_RUN` convention when tools/access missing
