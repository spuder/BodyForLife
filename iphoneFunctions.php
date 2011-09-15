<?php



//insert php functions here
// http://csswizardry.com/2010/01/iphone-css-tips-for-building-iphone-websites/

function iPhoneModifications(){


 if($browser == 'iphone')
 { 
  <title>Short iPhone only title</title>
 }
 else
 { 
  echo "<title>Regular title</title>";
 }

//disallow pinch zoom
if($browser == 'iphone')
   { 
  <meta name="viewport"
  content="width=device-width,
  minimum-scale=1.0, maximum-scale=1.0" />
 } 

}//end iphoneModifications


?>