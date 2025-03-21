<?php
$host = "localhost";
$user = "root";  // Default user in XAMPP
$password = "";  // No password by default
$database = "student_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
