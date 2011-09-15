<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'db.php';

$sqlCleanedFirstName = mysql_real_escape_string($_POST['formFirstNameEntered']);
$sqlCleanedLastName = mysql_real_escape_string($_POST['formLastNameEntered']);


$queryToInsertNewUser="INSERT INTO user (first_name, last_name)
        VALUES ('$sqlCleanedFirstName','$sqlCleanedLastName')";

if (!mysql_query($queryToInsertNewUser))
{
    echo "could not add user to database";
    
}
else echo "sucessfully added";



?>
