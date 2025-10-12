<?php
require "index_lib.php";

$action = $_GET["a"] ?? "view_md";

if ($action === "view_md") {
    $filepath = $_GET["c"] ?? "README.md";
    if (!file_exists($filepath)) {
        http_response_code(404);
        exit;
    }
    $filename = pathinfo($filepath, PATHINFO_FILENAME);
    $markdown = file_get_contents($filepath);
    require "views/markdown.php";

} else if ($action === "login") {
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        send_unauthorized_headers();
    } else if ($_SERVER['PHP_AUTH_USER'] !== "admin" || !password_verify("password", password_hash($_SERVER['PHP_AUTH_PW'], PASSWORD_DEFAULT))) {
         send_unauthorized_headers();
    }
    $filepath = $_GET["c"] ?? "README.md";
    if (!file_exists($filepath)) {
        http_response_code(404);
        exit;
    }
    $filename = pathinfo($filepath, PATHINFO_FILENAME);
    $markdown = file_get_contents($filepath);
    require "views/markdown.php";

} else {
    http_response_code(404);
}