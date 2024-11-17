<?php
$host = "database-1.czig4cuce86b.ap-south-1.rds.amazonaws.com"; // RDS endpoint
$port = "3306"; // Default MySQL port
$dbname = "data"; // Database name
$username = "admin"; // RDS username
$password = "shaikfirose"; // RDS password

$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to RDS!";
?>
