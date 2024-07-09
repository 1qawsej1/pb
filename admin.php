<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - SMK Sacred Heart Junior Prefectorial Board</title>
</head>
<body>
    <h2>Admin Dashboard</h2>

    <!-- Image Upload Form -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h3>Upload Image</h3>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <!-- Article Typing Form (example) -->
    <form action="save_article.php" method="post">
        <h3>Write Article</h3>
        <textarea name="articleContent" rows="10" cols="50" placeholder="Type your article here..." required></textarea><br>
        <input type="submit" value="Save Article" name="submit">
    </form>
</body>
</html>
