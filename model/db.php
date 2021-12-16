<?php
$servername = "localhost";
$username = "ppgfkip";
$password = "DSy0L7gZu3Kq";
$dbname = "ppgfkip_web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
