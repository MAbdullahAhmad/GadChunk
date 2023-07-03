## Compression

`zip -r project.zip Admin/ app/ artisan bootstrap/ composer.* config/ database/ .env lang/ package* phpunit.xml postcss.config.js public/ resources/ routes/ storage/ tailwind.config.js  tests/ vite.config.js vite.config.js` (local)

`unzip project.zip` (server)

## Installation & Setup

`nano .env` (for db config)
`composer install`
`php artisan migrate`
`nano .htaccess` (for / to /public RewriteRule)
