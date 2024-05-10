<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flower";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    die("connection fail:".mysqli_connect_error());
}
