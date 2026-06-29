# ApexPlanet-Task4-Styling-Responsive-Design

A fully styled, responsive PHP & MySQL web application — built as part of the **ApexPlanet Software Pvt. Ltd. 30-Day Web Development Internship (Task 4)**. Builds on Tasks 1–3.

---

## 🛠 Tech Stack

- PHP (PDO)
- MySQL
- **CSS3** — custom properties, media queries, animations
- HTML5 — semantic elements, ARIA accessibility
- JavaScript — client-side validation
- XAMPP / WAMP

---

## 📁 Project Structure

```
task4/
├── style.css          ⭐ Shared stylesheet — CSS styling + responsive design
├── db.php             # PDO connection with error handling
├── setup.sql          # Database schema
├── register.php       # Registration page
├── login.php          # Login page
├── dashboard.php      # Protected dashboard
├── manage_users.php   # CRUD — manage users table
├── edit_user.php      # Edit user form
├── delete_user.php    # Delete handler
├── logout.php         # Secure logout
└── screenshots/       # Application on various devices
```

---

## ⚙️ Setup Instructions

### 1. Install XAMPP / WAMP
Start **Apache** and **MySQL** services.

### 2. Place the project
- **XAMPP:** `C:/xampp/htdocs/task4/`
- **WAMP:**  `C:/wamp64/www/task4/`

### 3. Create the Database
Run `setup.sql` in phpMyAdmin (same schema as Tasks 2 & 3).

### 4. Configure credentials
```php
// db.php
define('DB_USER', 'root');
define('DB_PASS', '');
```

### 5. Run
```
http://localhost/task4/register.php
```

---

## 🎨 Task 4 Objectives Completed

### ✅ 1. CSS Styling
All styling moved into a single shared **`style.css`** file using **CSS custom properties**:

```css
:root {
    --clr-primary:  #1a5c4f;
    --clr-accent:   #3aafa9;
    --clr-bg:       #f0f4f3;
    /* ... all colors, shadows, radii in one place */
}
```

- Forms, tables, and navigation all styled consistently
- Every page links `<link rel="stylesheet" href="style.css">` — no duplicate styles
- Unified button system: `.btn-primary`, `.btn-accent`, `.btn-outline`, `.btn-ghost`, `.btn-danger`, `.btn-info`
- Sticky header navigation visible on all pages while scrolling
- Card slide-up entrance animation (`@keyframes slideUp`)
- Info cards lift on hover (`transform: translateY(-2px)`)

### ✅ 2. Responsive Design — CSS Media Queries

| Breakpoint | Screen Width | Layout Changes |
|---|---|---|
| Desktop | > 900px | Full multi-column layout, full navbar |
| Tablet | ≤ 900px | 2-column info grid, reduced padding |
| Mobile | ≤ 600px | Single-column stacked layout, hamburger nav |
| Extra small | ≤ 380px | Single-column info grid |

```css
/* Mobile */
@media (max-width: 600px) {
    .welcome-card  { flex-direction: column; text-align: center; }
    .info-grid     { grid-template-columns: 1fr 1fr; }
    .btn-row       { flex-direction: column; }
    .actions       { flex-direction: column; }
    .user-pill     { display: none; }
}
/* Tablet */
@media (max-width: 900px) {
    .info-grid     { grid-template-columns: repeat(2, 1fr); }
}
```

On **mobile**, the manage users table switches to a **card-based layout** to avoid horizontal scrolling.

### ✅ 3. User Interface Enhancements
- Semantic HTML: `<header>`, `<nav>`, `<main>`, `<table scope>`, `<nav aria-label>`
- All buttons have `aria-label` attributes for screen readers
- Error messages use `role="alert"` and `role="status"`
- `.sr-only` utility class for screen-reader-only content
- `autocomplete` attributes on all form inputs
- `:focus-visible` keyboard navigation ring
- Print stylesheet — hides nav/buttons when printing

---

## 📸 Screenshots — Application on Various Devices

### 🔐 Login Page

| 📱 Mobile (390px) | 📟 Tablet (768px) | 🖥️ Desktop (1280px) |
|---|---|---|
| ![Login Mobile](screenshots/login-mobile.png) | ![Login Tablet](screenshots/login-tablet.png) | ![Login Desktop](screenshots/login-desktop.png) |

---

### 📝 Register Page

| 📱 Mobile | 📟 Tablet | 🖥️ Desktop |
|---|---|---|
| ![Register Mobile](screenshots/register-mobile.png) | ![Register Tablet](screenshots/register-tablet.png) | ![Register Desktop](screenshots/register-desktop.png) |

---

### 🏠 Dashboard

| 📱 Mobile | 📟 Tablet | 🖥️ Desktop |
|---|---|---|
| ![Dashboard Mobile](screenshots/dashboard-mobile.png) | ![Dashboard Tablet](screenshots/dashboard-tablet.png) | ![Dashboard Desktop](screenshots/dashboard-desktop.png) |

---

### 👥 Manage Users

| 📱 Mobile (card layout) | 📟 Tablet | 🖥️ Desktop |
|---|---|---|
| ![Manage Mobile](screenshots/manage-users-mobile.png) | ![Manage Tablet](screenshots/manage-users-tablet.png) | ![Manage Desktop](screenshots/manage-users-desktop.png) |

---

### ✏️ Edit User

| 📱 Mobile | 📟 Tablet | 🖥️ Desktop |
|---|---|---|
| ![Edit Mobile](screenshots/edit-user-mobile.png) | ![Edit Tablet](screenshots/edit-user-tablet.png) | ![Edit Desktop](screenshots/edit-user-desktop.png) |

---

## 🔐 Security (inherited from Task 3)

- PDO prepared statements throughout
- `password_hash()` / `password_verify()`
- `session_regenerate_id(true)` on login and first dashboard load
- Secure three-step logout
- `htmlspecialchars()` on all output
- `error_log()` for real errors — users never see raw exceptions

---

## 👨‍💻 Author

**Name:** Abdul Basith
**Internship at:** ApexPlanet Software Pvt. Ltd.
**Program:** Web Development — PHP & MySQL (30 Days)
**Task:** Task 4 — Styling and Responsive Design
