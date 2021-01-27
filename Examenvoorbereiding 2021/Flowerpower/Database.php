<?php
$dbservername="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname="examenvoorbereiding2021";

$conn = mysqli_connect($dbservername, $dbusername , $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: "$conn->connect_error);
} else {
    echo "Connected successfully";
}

?>

