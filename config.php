<?php
// Database credentials — replace with your UOS webspace DB details
define('DB_HOST', 'localhost');
define('DB_NAME', 'eportfolio_db');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');

// Create connection (mysqli)
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($mysqli->connect_errno) {
    http_response_code(500);
    die('Database connection failed: ' . htmlspecialchars($mysqli->connect_error));
}

// Stronger output escaping helper
function e($str) {
    return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8');
}
