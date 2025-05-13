# 🎒 Johanna’s CDN

Welcome to my personal CDN — a collection of self-hosted **fonts**, **stylesheets**, and other frontend resources. Everything here is delivered lightning-fast via [jsDelivr](https://www.jsdelivr.com/), and built to be reused across my projects — or yours!

No build steps. No dependencies. Just copy, paste, and go. 🚀

---

## 🌍 CDN Base URL

All files in this repo are instantly available via **jsDelivr**.

Use this base URL:

```
https://cdn.jsdelivr.net/gh/johanna-fageras/static@latest/
```

You can also pin to a specific version tag for stability:

```
https://cdn.jsdelivr.net/gh/johanna-fageras/static@v1.0.0/
```

> 🔒 `@latest` always points to the latest commit on `main`. For production use, it's better to pin a version like `@v1.0.0`.

---

## 📁 Folder Structure

```text
static/
├── fonts/
│   ├── inter/
│   │   ├── fonts/
│   │   │   ├── Inter-Regular.woff2
│   │   │   └── Inter-Bold.woff2
│   │   └── index.css
├── styles/
│   ├── base/
│   │   └── reset.css
│   ├── themes/
│   │   ├── light.css
│   │   └── dark.css
│   └── utils/
│       ├── typography.css
│       └── spacing.css
└── README.md
```

---

## 🏃‍♀️ Usage Examples

### Include a Font Stylesheet

```html
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/gh/johanna-fageras/static@latest/fonts/inter/index.css"
/>
```

### Include a Utility CSS File

```html
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/gh/johanna-fageras/static@latest/styles/utils/typography.css"
/>
```

### Include a Theme

```html
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/gh/johanna-fageras/static@v1.0.0/styles/themes/light.css"
/>
```

---

## 🔹 Versioning

This repo uses semantic versioning tags (e.g., `v1.0.0`) to allow safe, production-friendly linking.

To create a new version:

```bash
git tag v1.0.1
git push origin v1.0.1
```

---

## 💭 Feedback / Suggestions

Got an idea or want to contribute a new style snippet or font? Feel free to open an issue or pull request.

---

## ✌️ License

This project is open source and available under the [MIT License](LICENSE).

Use it. Remix it. Ship it.

Stay snappy out there, dev friend — ✨

— Johanna
