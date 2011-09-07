<?php
$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
  if ($browser == true){
  $browser = 'iphone';
}
if($browser=='iphone'){
	echo $user_agent;}
	else {echo "you are running a desktop";}	


//
?>

<html> 
	<head>
	
	<div name="wrapper" style="text-align: center;">
		<div name="logo">
	

		</div> 
		<div name="userName" style="text-align: center;">
		
			<input type=text placeholder="Name">
		
		</div> 
		<div name="password" style="text-align: center;">
		
			<input type=password placeholder="Password">
		
		
		</div> 
	</div> 
	
	</head>
</html> 