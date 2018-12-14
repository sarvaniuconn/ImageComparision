<?php 
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="imagecomparisionsurvey";

$conn=new mysqli("$dbhost","$dbuser","$dbpass","$db");

//check connection

if($conn->connect_error)
{
echo "Connection was Failed";

}


