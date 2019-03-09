<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gudangdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error){
    die('Connection Failed: ' .$mysqli->connect_errno.' - '.$mysqli->connect_error);
}
?>
