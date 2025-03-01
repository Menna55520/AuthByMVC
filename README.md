# AuthenticationMVC

## Description
`AuthenticationMVC` is an enhanced authentication project built using a custom MVC (Model-View-Controller) framework I developed in my previous repository ([MVCFramework](https://github.com/Menna55520/MVCFramework.git)). This project leverages that mini framework to implement a complete user authentication system, including account creation (signup), login, and logout functionalities. It represents an improved version of my earlier `AuthenticationMVC` project, with refined features, better structure, and additional capabilities.

The goal was to apply my understanding of the MVC design pattern to create a practical web application. This version enhances the original by adding a fully functional login/logout system alongside the existing signup feature, improving code organization, and optimizing the routing system for better request handling. It’s a step forward in my learning journey with PHP, MVC, and web development.

---

## Project Structure
```
├───app
│   ├───controllers
│   ├───core
│   ├───models
│   └───views
└───public
    └───assets
        ├───brand
        ├───css
        └───js
```
---

## Components
- **`app/`**: Contains the core logic of the application:
  - **`controllers/`**: Houses controllers like `SignUp.php`, which manage request flow between models and views.
  - **`core/`**: Includes foundational files:
    - `App.php`: Implements the routing system to parse URLs and load the appropriate controllers and methods.
    - `Database.php`: Provides database connectivity using PDO with a reusable `Query` method.
  - **`models/`**: Contains data-handling classes like `User.php` for validation and database operations.
  - **`views/`**: Holds templates like `home.php` (homepage) and `signup.php` (registration form).
- **`public/`**: The public-facing directory:
  - **`assets/`**: Stores static files and branding (`bootstrap-logo.svg`).
  - **`index.php`**: The entry point of the application, directing all requests through the routing system.

---

## Features
- **MVC Pattern**: Separates logic (Model), presentation (View), and control flow (Controller) for better organization.
- **Routing System**: A custom-built router in `App.php` that processes URLs and maps them to controllers and methods.
- **User Registration**: A basic form in `signup.php` to collect email, password, and terms acceptance, validated and stored via `User.php`.
- **Database Integration**: Uses PDO for secure database interactions.

---
## Notes
- I built this project in the simplest form possible to demonstrate how I use the MVC pattern to create a functional application, rather than rebuilding everything from scratch.
- Many features could be added, such as password encryption (e.g., using hashing like bcrypt), stronger validation rules, or more robust session management.
- My focus was on keeping it minimal and clear to highlight the MVC structure and workflow, making it a foundation that can be expanded with additional functionalities as needed.

---
## Templates Used
- **[BootStrap Examples](https://getbootstrap.com/docs/4.0/examples/)** : i used cover for home page view and sign-in in processes create accout and login views

