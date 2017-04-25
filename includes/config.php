<?php
 error_reporting(E_ALL);
 
$base="http://site.com";
$host= "localhost";
$db_name="";
$db_username="";
$db_password="";
try
{
	$pdo= new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password) or die('akku');
	//echo "connecting";
}
catch(PDOException $e)
{
	exit("Error Connectiong to database");
}
?>