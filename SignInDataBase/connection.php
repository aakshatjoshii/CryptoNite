<?php

$host="localhost";
$user="root";
$password="";
$db_name="authentication";

$connection=mysqli_connect($host,$user,$password,$db_name);
if(mysqli_connect_errno()){
    die("Failed to connect to MYSQL:".mysqli_connect_error());
}
else{
    echo"Connection Established";
}

?>