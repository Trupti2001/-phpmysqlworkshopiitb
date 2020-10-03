<?php
$db_host = "localhost";               // Database Host
$db_user = "root";                    // Database User
$db_pass = "root";                        // Database Password
$db_name = "website_visitor_counter"; // Database Name
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
