<?php
include 'db_config.php';

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO clients (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Data saved successfully.";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
