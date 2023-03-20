<?php

$servernam = "localhost";
$username = "root";
$password= "";
$dbname = "crud";

$conn = mysqli_connect($servernam, $username, $password, $dbname );

if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}
// echo "Connected successfully";

?>