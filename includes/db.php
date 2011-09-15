<?php
/*
$username='root';
$password='root';
$host='localhost';
$database='bfl';
$db=mysql_connect($host,$username,$password);
if (!$db){
	die('could not connect to database');
}

mysql_select_db($database,$db);
*/


$host='localhost';
$username='root';
$password='root';
$database='bfl';
$dbConnectState = false;

// create connection to server on local host with shema is called bfl
$connectionParameters = mysql_connect($host,$username,$password,$database);
if(!$connectionParameters)
{
    die('could not connect:' . mysql_error());
}

// SELECT database schema to be used, essential with mysql
if(!mysql_select_db("bfl",$connectionParameters))
{
    echo "error conecting to bfl";
}
else
{
    $dbConnectState = true;
}
	
?>