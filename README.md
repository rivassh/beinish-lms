# Portfolio Starter

Laravel starter template for the multi-site portfolio. Fork this per project and add the `portfolio-theme` submodule.

## Quick Start

```bash
# 1. Clone this starter
git clone <starter-repo> <project-name>
cd <project-name>

# 2. Add theme submodule
git submodule add https://github.com/rivassh/portfolio-theme.git packages/portfolio-theme

# 3. Copy env and configure
cp .env.example .env
# edit .env, theme.config.json

# 4. Install PHP dependencies
composer install

# 5. Build theme assets
./scripts/build.sh

# 6. Serve
php artisan serve
```

## Directory Structure

```
app/              Laravel application code
resources/views/  Blade views (layouts, partials, pages)
resources/lang/   fa/en/ar language files
database/         migrations + seeders
tests/            unit/feature/e2e/security
docs/             requirements/adr/contracts/runbooks/qa
scripts/          build + dev scripts
public/           web root
storage/private/  private storage
```

## Conventions

- Trilingual: fa/en/ar, RTL for fa/ar
- Hero gaze at physical top-right (no `inline-end`)
- `theme.config.json` drives tokens, nav, locales
- `packages/portfolio-theme/` is a read-only submodule
- `.env.example` committed; `.env` is gitignored (no secrets)
