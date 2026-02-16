# 📚 BookNest - Personal eBook Library

BookNest is a full-stack **personal eBook library web application**
built using **HTML, CSS, JavaScript, PHP, and MySQL**.\
It allows users to upload, store, manage, and read eBooks from a clean,
modern dashboard.

This project demonstrates real-world **CRUD operations, file upload
handling, database integration, and professional UI design**.

------------------------------------------------------------------------

## 🚀 Features

-   Upload eBooks (PDF / EPUB)
-   Store book metadata in MySQL
-   View all books in a dashboard
-   Read books directly in browser
-   Delete books
-   Modern card-based UI
-   Responsive design
-   Drag & drop style upload UI

------------------------------------------------------------------------

## 🛠 Tech Stack

### Frontend

-   HTML5
-   CSS3
-   JavaScript

### Backend

-   PHP
-   MySQL (SQL) 

### Tools

-   XAMPP / WAMP / LAMP
-   phpMyAdmin

------------------------------------------------------------------------

## 📂 Project Structure

    ebook-library/
    │
    ├── uploads/            # Uploaded eBook files
    │
    ├── db.php              # Database connection
    ├── index.php           # Dashboard (list books)
    ├── upload.php          # Upload UI
    ├── upload_action.php   # Upload logic
    ├── delete.php          # Delete book
    │
    ├── style.css           # Main styles
    └── README.md

------------------------------------------------------------------------

## 🗄 Database Setup

Create database:

``` sql
CREATE DATABASE ebook_library;
```

Create table:

``` sql
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    author VARCHAR(255),
    category VARCHAR(100),
    file_name VARCHAR(255),
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

------------------------------------------------------------------------

## ⚙️ How to Run Locally

### Step 1

Install **XAMPP** and start: - Apache - MySQL

### Step 2

Clone or copy project into:

    htdocs/ebook-library

### Step 3

Open browser:

    http://localhost/ebook-library/index.php

------------------------------------------------------------------------

## 🔐 Security Note

The project uses **prepared statements** to prevent SQL injection and
query errors caused by special characters like `'`.

Example:

``` php
$stmt = mysqli_prepare($conn,
"INSERT INTO books (title, author, category, file_name) VALUES (?, ?, ?, ?)");

mysqli_stmt_bind_param($stmt, "ssss", $title, $author, $category, $fileName);
mysqli_stmt_execute($stmt);
```

------------------------------------------------------------------------

## 🌱 Future Improvements

-   User authentication (login system)
-   Book cover images
-   Search & filter
-   Categories page
-   PDF preview (PDF.js)
-   Reading progress
-   Favorites
-   Cloud storage (AWS S3 / Firebase)
-   REST API version
-   React frontend

------------------------------------------------------------------------

## 🎯 Learning Outcomes

This project covers:

-   Real CRUD system
-   File upload handling
-   PHP--MySQL integration
-   SQL debugging
-   Backend error handling
-   UI/UX design
-   Full-stack workflow

------------------------------------------------------------------------

## 👨‍💻 Author

**Arik Mukherjee**
Full Stack Developer | MSc, Computer Science

------------------------------------------------------------------------

## ⭐ Why This Project Matters

It demonstrates: - Real backend logic
- Real database usage
- Real debugging
- Real UI design

------------------------------------------------------------------------

## 📜 License

This project is open-source and free to use for learning and personal
purposes.
