# PHP Login Session System – Mini Fullstack Project

This is a **PHP Login & Registration System** that demonstrates session management using `$_SESSION`.  
It is structured as a **mini fullstack project**, including both **frontend** (Bootstrap 5 forms and layout) and **backend** (PHP logic and MySQL database interaction), without using a separate API layer.

This system is developed as a standalone module that can be integrated into a larger PHP-based project.

---

## ✅ Project Features

- User registration with form validation and MySQL integration  
- User login with session management using `$_SESSION`  
- Logout functionality with session destruction  
- Frontend designed using Bootstrap 5, fully responsive  
- Backend handling using pure PHP (no frameworks)  
- Simple database setup using `nooneneodb.sql`  
- Clean and modular project structure (separate view and logic files)

---

## ✅ Folder Structure

All files are placed in the root folder:

/php-login-session
├── connection.php # Database connection file
├── nooneneodb.sql # MySQL database export file
├── footer.php # Footer layout include
├── head.php # Head section with meta tags and Bootstrap includes
├── index.php # Main landing page after login
├── login.php # Login backend logic
├── login.view.php # Login form (frontend)
├── logout.php # Logout logic
├── navbar.php # Navigation bar include
├── register.php # Registration backend logic
├── register.view.php # Registration form (frontend)
├── README.md # Project documentation


---

## ✅ Database Setup

This project uses a MySQL database named:  
**`nooneneodb`**

You will find the exported database file:  
**`nooneneodb.sql`**

### How to Import:

1. Create the database:


2. Import the `nooneneodb.sql` file into that database using phpMyAdmin or CLI:

**Command-line example:**


3. Make sure `connection.php` is configured with your database credentials:

```php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'nooneneodb';

✅ How To Run Locally
Clone the repository:

bash
Copy
Edit
git clone https://github.com/branislavpaunovic/php-login-session.git
Copy the project folder into your local server directory (e.g., htdocs for XAMPP).

Import the provided SQL file as described above.

Start Apache and MySQL services through XAMPP.

Open your browser and navigate to:

pgsql
Copy
Edit
http://localhost/php-login-session/login.view.php
Register a new user, then log in using the created account.

✅ Project Purpose
This PHP Login Session System is a mini fullstack project created as part of a larger PHP web application.
Its purpose is to serve as a modular user authentication system that can be integrated into more complex PHP projects.

It demonstrates:

Frontend and backend integration using PHP and Bootstrap without external JavaScript frameworks or API layers.

Session handling via PHP's native $_SESSION system.

Database interaction using mysqli extension.

Clean project structuring suitable for freelance platforms, portfolio presentation, or as a starter module in larger systems.

✅ Author
Branislav (NoOneNeo) Paunović
Freelance Web Developer | Full Stack Developer | IT Student

✅ Notes
For production environments, password handling should use password_hash() and password_verify() for security.

CSRF protection, input sanitization, and full validation should also be added in real-world scenarios.

This project is designed for clean integration into larger PHP applications as a user authentication module.



