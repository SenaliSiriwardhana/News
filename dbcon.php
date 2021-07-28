<?php

$server="localhost";
$uname="root";
$pw="";
$dbname="nsbm";



$con=mysqli_connect($server,$uname,$pw,$dbname);

if(!$con)
{
	die ("Connection Error! ".mysqli_connect_error());
} 
echo "Connected Sucessfully.";




?>