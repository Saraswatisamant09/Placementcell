<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "saras";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   echo" ";
?>