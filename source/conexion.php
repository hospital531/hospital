
<?php

$servername =   'bhxb34dz8w6nd0kqt7vl-mysql.services.clever-cloud.com';
$username   =   'uwrnbgfvoxnmdgus';
$password   =   'tTIgPML07LVnnEgzsnZD';
$dbname     =   "bhxb34dz8w6nd0kqt7vl";
$con=mysqli_connect($servername,$username,$password,$dbname);
if($con === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
