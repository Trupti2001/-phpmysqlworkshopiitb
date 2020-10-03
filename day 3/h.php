<?php
require 't.php';

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "result";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
/*$sql = "CREATE TABLE class1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
SUB1 INT(30) NOT NULL,
SUB2 INT(30) NOT NULL,
SUB3 INT(30) NOT NULL,
SUB4 INT(30) NOT NULL,
SUB5 INT(30) NOT NULL,
TOTALO INT(30) NOT NULL,
TOTALM INT(30) NOT NULL,
PERCENT INT(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);*/
?>
