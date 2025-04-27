<?php
$host ="localhost";
$user = "glmcolor_nuwfi_user";
$password = "04171995";
$dbname = "glmcolor_nuwfi_client";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
