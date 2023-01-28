<?php
$servername = "localhost";
$username = "u324000355_amriennt";
$password = "Amriennt2023";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 