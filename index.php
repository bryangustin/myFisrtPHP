<!DOCTYPE html>
<html>
<head>
   	<title></title>
   	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<?php 
		$name = "Bryan";
		$age = 29;
		$eyes = "blue";
		$nameFamilly = array("Franz", "Claudine", "Melvin");
		$hungry = true;
	?>

	<p>Hi! My name is <?php echo "$name"?></p>

	<p>I am <?php echo "$age"?> years old.</p>

	<p>My eyes are <?php echo "$eyes"?></p>

	<p>The first person in my family is <?php echo "$nameFamilly[0]"?></p>

	<p> Am i Hungry ? <?php
							if ($hungry == true) {
								echo "Oui";
							}
							else {
								echo "Non";
							}
	 					?>
	 	
	 </p>

</body>
</html>