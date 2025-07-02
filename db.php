<?php
$host = "sql202.infinityfree.com";
$user = "if0_39375683";
$pass = "hVvO1jVpWyGz";
$db = "if0_39375683_crud_demo";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
