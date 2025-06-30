# 🏃‍♀️ RunMate – Your Ultimate Running Companion

**RunMate** is a dynamic, multi-page fitness-themed website developed as a college project. It connects runners through events, activities, prizes, and more — all presented via a responsive, stylish interface with a working registration and login system.

---

## 📁 Project Pages

| File Name           | Purpose                                                  |
|---------------------|----------------------------------------------------------|
| `index.html`        | Homepage with carousel, branding, and intro content      |
| `registration.php`  | User registration and login (PHP + MySQL)                |
| `about.html`        | Information about the RunMate initiative                 |
| `activities.html`   | Highlights of fitness and community activities           |
| `events.html`       | List of events users can register for                    |
| `prizes.html`       | Rewards and prizes available for participants            |
| `goodies.html`      | Goodies and giveaways info                               |
| `logout.php`        | Destroys session and logs user out                       |
| `db/users.sql`      | SQL script to set up the user table                      |

---

## 💡 Features

- 📸 Carousel slider for homepage images
- 📝 Registration form storing user data in MySQL
- 🔐 Login system using PHP sessions
- 🙋 Personalized welcome message after login
- 🚪 Logout functionality
- 💻 Fully responsive layout with clean UI

---

## 🛠️ Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript, jQuery, Font Awesome, Google Fonts
- **Backend**: PHP (Core)
- **Database**: MySQL

---

## 🚀 How to Run This Locally

> You need XAMPP or WAMP installed to run the project locally.

### 1. Set Up Environment

- Download and install **XAMPP** (https://www.apachefriends.org/)
- Start **Apache** and **MySQL** via the XAMPP control panel

### 2. Create Database

- Open **phpMyAdmin**: `http://localhost/phpmyadmin`
- Create a database named `users`
- Run the following SQL:

```sql
CREATE TABLE `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `age` INT NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `password` VARCHAR(100) NOT NULL
);
