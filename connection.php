<?php
$hostname  = "localhost";
$username = "username";
$password = "";
$database = "escuelas";
$port = '3306';


// Create connection
$conn = new mysqli($hostname, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
