<?php

function send_unauthorized_headers() {
    header('WWW-Authenticate: Basic realm="VanillaCMS"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}
