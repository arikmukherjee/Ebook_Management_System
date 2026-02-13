<!DOCTYPE html>
<html>
<head>
    <title>Upload Book | BookNest</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="upload-wrapper">

    <div class="upload-card">
        <h2>📤 Upload New Book</h2>
        <p class="subtitle">Add a new book to your personal library</p>

        <form action="upload_action.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Book Title</label>
                <input type="text" name="title" placeholder="e.g. Clean Code" required>
            </div>

            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" placeholder="e.g. Robert C. Martin" required>
            </div>

            <div class="form-group">
                <label>Category</label>
                <input type="text" name="category" placeholder="e.g. Programming">
            </div>

            <div class="form-group">
                <label>Upload File</label>
                <div class="file-box">
                    <input type="file" name="book" accept=".pdf,.epub" required>
                    <span>Drag & drop or click to browse</span>
                </div>
            </div>

            <button class="btn-primary">Upload Book</button>
            <a href="index.php" class="btn-secondary">← Back to Library</a>
        </form>
    </div>

</div>

</body>
</html>
