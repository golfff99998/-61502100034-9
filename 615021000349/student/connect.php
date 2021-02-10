<?php
$servername = "localhost";
$username = "web";
$password = "1234";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);//("localhost","web","1234","login_db" );
mysqli_set_charset($conn, 'utf8');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>