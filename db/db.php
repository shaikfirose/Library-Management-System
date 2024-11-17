<?php
$host = "mydb.xxxxxx.us-east-1.rds.amazonaws.com"; // RDS endpoint
$port = "3306"; // Default MySQL port
$dbname = "yourdatabase"; // Database name
$username = "admin"; // RDS username
$password = "yourpassword"; // RDS password

$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to RDS!";
?>
