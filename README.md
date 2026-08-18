# PHP Frontend Resume Site

Minimal, editable PHP resume template.

Run locally using PHP built-in server:

```bash
cd "$(dirname "${BASH_SOURCE[0]}")"
php -S localhost:8000
```

Open http://localhost:8000 in your browser.

Files added:

- [index.php](index.php) — main template
- [assets/css/style.css](assets/css/style.css) — styles

Edit the `$resume` array at the top of `index.php` to customize content.

HTML + JavaScript version
-------------------------

An alternate static version is provided that uses plain HTML and client-side JavaScript.

- `index.html` — main static page
- `assets/js/app.js` — resume data and renderer

Run the static version locally using a simple server (recommended):

```bash
# from the project root
php -S localhost:8000
# or with Python 3
python3 -m http.server 8000
```

Open http://localhost:8000/index.html in your browser. Edit `assets/js/app.js` to change content.

