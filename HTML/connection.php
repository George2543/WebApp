<?php
$dbhost = " localhost" ;
$dbuser = "admin" ;
$dbpass = "Password@123" ;
$dbname = "myDatabase" ;

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect");
}
?>