<?php
$servername = "localhost";
$username = "dbusername";
$password = "dbpassword";

try {
  $conn = new PDO("mysql:host=$servername;dbname=dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$data = [
    'message' => $_POST['message'],
];
$sql = "INSERT INTO shoutbox (message) VALUES (:message)";
$stmt= $conn->prepare($sql);
$stmt->execute($data);