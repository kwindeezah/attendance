<?php 

// / connect to database
$host = "localhost";
$username = "root";
$password = "";
$dbName = "userLogin";

$conn = mysqli_connect($host, $username, $password, $dbName);

// check connection

if(!$conn){
    echo "connection failed" . mysqli_connect_error();
}
