<?php

// Database configuration for JawsDB
$servername = "your_jawsdb_host";
$port = 3306; // Port number
$username = "your_jawsdb_username";
$password = "your_jawsdb_password";
$dbname = "your_jawsdb_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Now $conn can be used for database operations
?>
