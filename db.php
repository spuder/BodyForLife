<?php
$username='root';
$password='root';
$host='localhost';
$database='bfl';
$db=mysql_connect($host,$username,$password);
if (!$db){
	die('could not connect to database');
}

mysql_select_db($database,$db);
	
?>