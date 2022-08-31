<?php
$servername = "localhost";
$database = "inline_db";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn, "utf8");
//echo 'Connected successfully<br>';

//mysqli_close($conn);

?>