<?php

$ServerName = "localhost";
$username = "root";
$password="";
$database ="UniversityFinder";

$conn = new mysqli($ServerName,$username,$password,$database);

if($conn -> connect_error){
    die("Connection Failed".$conn -> connect_error);
}


?>