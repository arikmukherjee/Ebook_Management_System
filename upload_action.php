<?php
include "db.php";

$title = $_POST['title'];
$author = $_POST['author'];
$category = $_POST['category'];

$file = $_FILES['book'];
$fileName = time() . "_" . $file['name'];
$tmpName = $file['tmp_name'];

move_uploaded_file($tmpName, "uploads/" . $fileName);

/* 🔧 ADD THESE 4 LINES */
$title = mysqli_real_escape_string($conn, $title);
$author = mysqli_real_escape_string($conn, $author);
$category = mysqli_real_escape_string($conn, $category);
$fileName = mysqli_real_escape_string($conn, $fileName);
/* 🔧 END */

$sql = "INSERT INTO books (title, author, category, file_name)
        VALUES ('$title', '$author', '$category', '$fileName')";

mysqli_query($conn, $sql);

header("Location: index.php");
?>
