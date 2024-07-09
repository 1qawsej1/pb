<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $articleContent = $_POST["articleContent"];
    $filename = "articles/article_" . date("Y-m-d-H-i-s") . ".txt"; // Example file name with timestamp
    file_put_contents($filename, $articleContent);
    echo "Article saved successfully.";
}
?>
