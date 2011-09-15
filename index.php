<?php


/*
index of operations

1. check to see if user is still logged in
	If True > proceed to home screen
	If False > proceed to login screen
 
2. show user name, date, body, 
	
*/

include_once 'includes/db.php';



?>
 
    <html>
        <head>    
        <script  src="js/ajax.js" type="text/javascript"></script>
         
     <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
     <meta name="apple-mobile-web-app-capable" content="yes" />
     <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
 

     
     <script type="text/javascript">
         function getUsers()
         {
             makeHttpRequest('includes/ajax.php','getUsers=1',callBack_getUsers)
         }
         
         function callBack_getUsers(returnedText)
         {
             
             console.log(returnedText); //sends data to console instead of alert box. 
             document.getElementById("users").innerHTML=returnedText;
         }
         
         function goToUser(idPassedIn)
         {
             alert('hey there number '+ idPassedIn)
         }
        
        onLoad=getUsers();
 
     </script>
     

        <link type="text/css" 
              rel="stylesheet" 
              href="bfl.css">
        
        </head>
        <body>
            
            
            <div id="inputForm" align="center" >
                
                <form action="newUserSignup.php" method="post">
                    <input type="text" name="formFirstNameEntered" placeholder="First Name" class="inputBox"/><br>
                    <input type="text" name="formLastNameEntered" placeholder="Last Name" class="inputBox"/>
            </div>
                            
                    <input type="submit" />
                </form>

                
                
    <div id="users" align="center">
       
   
    <?php
    /*
    
    
$result = mysql_query("SELECT * FROM user limit 8");

    while($row = mysql_fetch_array($result))
        {
        echo "<div class='orderedListOfUsers' >";
        echo $row['first_name'];
        echo "</div>";
        
        }
  */
  ?>

        
    </div>
    </body>
    </html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  <?php  
