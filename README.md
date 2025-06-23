# PHP User Login/Register System

A simple PHP & MySQL-based Login and Registration system with session authentication. Includes basic validation, password hashing, and session-based access control.

## 🗂 Project Structure

php_user_login_system/
├── index.php # Entry point – redirects to login or dashboard
├── dashboard.php # Protected page shown after login
├── include/
│ └── db.php # Database connection
├── auth/
│ ├── login.php # Login form and logic
│ ├── register.php # Registration form and logic
│ └── logout.php # Logout script
└── README.md # English documentation

## 📦 Features

- User Registration
- User Login with session
- Password Hashing using `password_hash()`
- Protected Dashboard
- Secure Logout
- Simple and clean UI
- Written in native PHP (no framework)

## 🛠️ Setup Instructions

1. Clone or download the project into your web server directory (`htdocs` for XAMPP).
2. Create a database named `userdb`.
3. Run the following SQL to create the `user` table:

sql
CREATE TABLE user (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Password VARCHAR(255) NOT NULL
);

4. Update include/db.php if your DB username or password is different.

5. Open the project in your browser: http://localhost/php_user_login_system/
🔐 Security Notes
- Uses password_hash() and password_verify() for secure password storage.
- Sessions are used to manage login state.
- Input fields are validated for empty values.
- Prepared statements are used to prevent SQL Injection.
