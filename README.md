# Crumb & Butter Bakery

A small-batch bakery storefront built with PHP, HTML, CSS and vanilla JavaScript. The PHP page owns the product catalogue, while JavaScript adds category filtering and a shopping bag interaction.

Run locally using PHP built-in server:

```bash
cd "$(dirname "${BASH_SOURCE[0]}")"
php -S localhost:8000
```

Open http://localhost:8000 in your browser.

Files added:

- [index.php](index.php) — main template
- [assets/css/style.css](assets/css/style.css) — styles

Edit the `$products` array at the top of `index.php` to customize the menu, prices and product images.

The page expects PHP to be installed. The browser interactions are in `assets/js/app.js`, and the visual design is in `assets/css/style.css`.

