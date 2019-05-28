<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="practice.php" method="get">
		Name: <input type="text" name="name"></input>
		<input type="submit" name="submitName">
	</form>
	<br>
	<?php
		// $charName = "Matt";
		// $charAge = 35;

		// echo "There once was a man named $charName<br>";
		// echo "He was $charAge years old<br>";
		// echo "He really like the name $charName<br>";
		// echo "But didn't like being $charAge<br>";
		// $phrase = "It was the best of times, it was the worst of times";
		// $age = 27;
		// $gpa = 3.76;
		// $isMammal = true;
		// null
		// $phrase = "Sith Academy";
		
		// echo str_replace("Academy", "Knight", $phrase);
		// echo substr($phrase, 5, 4);
		// $num = 10;
		// $num += 25;
		// echo $num;

		// echo max(2, 10);
		// echo floor(3.9);
		// echo ceil(4.1);

		echo $_GET["name"];
	?>

</body>
</html>