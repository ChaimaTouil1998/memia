<?php
// php start
$servername = "localhost";

$DBuser = "root";

$DBpassword = "";

$DBname = "ms_memia";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
return $conn;
//php end
