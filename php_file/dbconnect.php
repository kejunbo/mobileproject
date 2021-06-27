<?php
$servername = "localhost";
$username   = "kejunboc_mobileadmin";
$password   = "vT6*9*B+pHRq";
$dbname     = "kejunboc_mobileproject";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>