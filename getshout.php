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

$sth = $conn->prepare("SELECT * FROM shoutbox ORDER BY `msgid` DESC");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
$result = $sth->fetchAll();

foreach ($result as $row) {
    echo "$row[message]<br>";
}