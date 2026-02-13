<?php
include "db.php";
$id = $_GET['id'];

$res = mysqli_query($conn, "SELECT file_name FROM books WHERE id=$id");
$row = mysqli_fetch_assoc($res);

unlink("uploads/" . $row['file_name']);
mysqli_query($conn, "DELETE FROM books WHERE id=$id");

header("Location: index.php");
?>
