<?php
    // $conn  = mysqli_connect("localhost","root","", "livedb_r1");
    // if (mysqli_connect_errno()) {
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // }else {
    //     echo "connected";
    //     $conn  = mysqli_connect("localhost","root","", "livedb_r1");
    // }
$host = "localhost";
$user_name = "root";
$pass = "";
$db = "livedb_r1";
// $connections = mysqli_connect($host,$user_name,$pass,$db);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
  $conn = mysqli_connect($host,$user_name,$pass,$db);
  $conn->set_charset("utf8mb4");
} catch(Exception $e) {
  error_log($e->getMessage());
  exit('Error connecting to database'); //Should be a message a typical user could understand
}
?>