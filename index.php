<?php
$action = $_GET["a"] ?? "view_md";

if ($action === "view_md") {
    $filepath = $_GET["c"] ?? "README.md";
    if (!file_exists($filepath)) {
        http_response_code(404);
        echo "Not Found";
        exit;
    }
    $filename = pathinfo($filepath, PATHINFO_FILENAME);
    $markdown = file_get_contents($filepath);
    require "views/markdown.php";
} else {
    http_response_code(404);
    echo "Not Found";
    exit;
}