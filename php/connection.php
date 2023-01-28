<?php
$host = "localhost";
$user = "u324000355_amriennt";
$password = "Amriennt2023.";
$db_name = "u324000355_diwataoil";

// Create connection
$conn = mysqli_connect($host, $user, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
  ?>