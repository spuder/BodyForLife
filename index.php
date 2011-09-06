
<?php


//echo "<pre>"; print_r($_SERVER);exit();

	include 'db.php';
	if(isset($_POST["spencerssubmit"])){
		//spencer here is where you could insert into the database
		echo "<pre>"; print_r($_POST);
		$weight=$_POST["weight"];
		$workout_id = $_POST['workout_id'];
		echo $weight;
		
		$sql="update workout_template set Actual_Weight ='$weight' where workout_template_id =$workout_id ";
		echo $sql;
		$result=mysql_query($sql);
			//if errors, show why.
		if(!$result) {echo "there was an error:" .mysql_error($db); exit();}

	
	}
	
?>




<html><head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<meta name="author" content="Flux User" >
		<meta name="description" content="My Website" >
		<meta name="keywords" content="Flux, Mac" >
		<link href="main.css" rel="stylesheet" type="text/css" >
		<title>My Webpage</title>
	</head>
	<body style="" >
	
	
	<?php


$sql='select workout_template_id,Planned_Exercize from workout_template where workout_template_id = 2 limit 1';
$result=mysql_query($sql);
if(!$result) {echo "there was an error:" .mysql_error($db); exit();}
if(mysql_num_rows($result)==0){echo "there are no workouts";}
while($row = mysql_fetch_assoc($result)){
//	echo "<pre>"; print_r($row);
	echo $row["Planned_Exercize"];
	$workout_id = $row["workout_template_id"];
	}
$planned_weight = 40;
?>


	
	<form name="myform" method="POST" >
	
planned weight: <label type="text" name="exercise"><?php echo $planned_weight;?></label>
<input type="text" name="weight" value="" placeholder="weight" />
<input type="text" name="reps" value="" placeholder="reps" />
<input type="text" name="intensity" value="" placeholder="intensity" />
<input type="hidden" name="workout_id" value="<?php echo $workout_id;?>" placeholder="weight" />





<input type="submit" name="spencerssubmit" value="Submit" />

<select>
	<optgroup label="Mac laptops" >
		<option value="macbook" >MacBook</option>
		<option value="macbookpro" >MacBook Pro</option>
	</optgroup>
	
	<optgroup label="Mac desktops" >
		<option value="macmini" >Mac Mini</option>
		<option value="macpro" >Mac Pro</option>
		<option value="imac" >iMac</option>
	</optgroup>
</select>
</form>
	
</body></html>

