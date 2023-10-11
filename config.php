<?php

// Database configuration
$servername = "eanl4i1omny740jw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$port = 3306; // Port number
$username = "lnlryion8xn4tpkt";
$password = "wc49zn9jakqvt298";
$dbname = "wv1hxbhg505xs24y";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
