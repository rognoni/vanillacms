<?php
require "index_lib.php";

$action = $_GET["a"] ?? "view_md";

if ($action === "view_md") {
    view_markdown();

} else if ($action === "login") {
    if (!admin_verify()) {
        send_unauthorized_headers();
    }
    view_markdown();

} else {
    http_response_code(404);
}