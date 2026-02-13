<?php
include "db.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

$result = mysqli_query($conn, "SELECT * FROM books");
?>

<!DOCTYPE html>
<html>
<head>
    <title>My eBook Library</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="app">

    <aside class="sidebar">
        <h2>📚 BookNest</h2>
        <a href="index.php">Dashboard</a>
        <a href="upload.php">Upload Book</a>
        <a href="#">Categories</a>
        <a href="#">Settings</a>
    </aside>

    <main class="main">
        <div class="topbar">
            <input type="text" placeholder="Search books...">
        </div>

        <div class="grid">
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card">
                    <div class="cover">PDF</div>
                    <h3><?= $row['title'] ?></h3>
                    <p><?= $row['author'] ?></p>
                    <div class="actions">
                        <a href="uploads/<?= $row['file_name'] ?>" target="_blank">Read</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="danger">Delete</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>

</div>

</body>
</html>
