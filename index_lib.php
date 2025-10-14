<?php

function admin_verify() {
    return (isset($_SERVER['PHP_AUTH_USER']) && $_SERVER['PHP_AUTH_USER'] === "admin" && password_verify("password", password_hash($_SERVER['PHP_AUTH_PW'], PASSWORD_DEFAULT)));
}

function view_markdown() {
    $filepath = $_GET["c"] ?? "README.md";
    if (!file_exists($filepath)) {
        http_response_code(404);
        exit;
    }
    $filename = pathinfo($filepath, PATHINFO_FILENAME);
    $markdown = file_get_contents($filepath);
    require "views/markdown.php";
}

function send_unauthorized_headers() {
    header('WWW-Authenticate: Basic realm="VanillaCMS"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}
