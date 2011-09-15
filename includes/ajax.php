<?php

include_once 'db.php';

if(isset ($_POST['getUsers']))
{
    //what i want to happen when someone does getUsers
    
    
    
    
$result = mysql_query("SELECT * FROM user limit 8");

    while($row = mysql_fetch_array($result))
        {
        echo "<div class='orderedListOfUsers' onClick='goToUser({$row['user_id']})' >";
        echo $row['first_name'];
        echo "</div>";
        
        }
  
  
    
}
?>
