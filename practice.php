<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- <form action="practice.php" method="get"> -->
	<!-- <form action="practice.php" method="post"> -->
		<!-- <input type="text" name="name"> -->
		<!-- <input type="number" name="num1">
		<br>
		<input type="number" name="num2"> -->
		<!-- Color: <input type="text" name="color"><br>
		Plural Noun: <input type="text" name="pluralNoun"><br>
		Person: <input type="text" name="person"><br> -->
		<!-- Password: <input type="password" name="password"> -->
		<!-- Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
		Cherries: <input type="checkbox" name="fruits[]" value="cherries"><br>
		Peaches: <input type="checkbox" name="fruits[]" value="peaches"><br> -->
		<!-- <input type="text" name="student"><br> -->
		
		<!-- First Number: <input type="number" step="0.1" name="num1"><br>
		Operator: <input type="text" name="operator"><br>
		Second Number: <input type="number" step="0.1" name="num2"><br> -->

<!-- 		What was your grade?
		<input type="text" name="grade">
 -->

		<!-- <input type="submit"><br> -->
	<!-- </form> -->
	<!-- <br> -->
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

		// echo $_GET["age"];
		// echo $_GET["num1"] + $_GET["num2"];
	// $color = $_GET["color"];
	// $pluralNoun = $_GET["pluralNoun"];
	// $person = $_GET["person"];

	// echo "Roses are {$color} <br>";
	// echo "{$pluralNoun} are blue <br>";
	// echo "I love {$person} <br>";
	// echo $_POST["password"];
	// $friends = array('Kevin', "Karen", "Oscar");
	// $friends[4] = "Angel";
	// echo count($friends);

	// $fruits = $_POST["fruits"];
	// echo $fruits[0];

	// $grades = array('Jim' => "A", 'Pam' => "A+", 'Luke' => "D");
	// echo $grades[$_POST["student"]];

	// function sayHi($name, $age)
	// {
	// 	echo "Hello, $name, you're $age <br>" ;
	// }

	// sayHi("Jim", 40);
	// sayHi("Aaron", 12);
	// sayHi("Dana", 25);

	// function cube($baseNum){
	// 	return $baseNum**3;
	// }

	// $cubeResult = cube(4);
	// echo $cubeResult;

	// $isMale = false;
	// $isTall = true;
	// if ($isMale && $isTall) {
	// 	echo "You're a tall male";
	// } elseif ($isMale && !$isTall) {
	// 	echo "You're male";
	// } elseif (!$isMale && $isTall) {
	// 	echo "You're tall, but not male";
	// } else {
	// 	echo "You're not male";
	// }

	// function getMax($num1, $num2, $num3){
	// 	if ($num1 >= $num2 && $num1 >= $num3) {
	// 		// echo $num1;
	// 		return $num1;
	// 	} elseif ($num2 >= $num1 && $num2 >= $num3) {
	// 		return $num2;
	// 	} else{
	// 		// echo $num2;
	// 		return $num3;
	// 	}
	// }

	// echo getMax(3000000, 90000, 2000);

	// $num1 = $_POST["num1"];
	// $num2 = $_POST["num2"];
	// $operator = $_POST["operator"];

	// if ($operator == "+") {
	// 	echo $num1 + $num2;
	// } elseif ($operator == "-") {
	// 	echo $num1 - $num2;
	// } elseif ($operator == "*") {
	// 	echo $num1 * $num2;
	// } elseif ($operator == "/") {
	// 	echo $num1 / $num2;
	// } else {
	// 	echo "Invalid operator";
	// }

	// $grade = $_POST["grade"];

	// switch ($grade) {
	// 	case 'A':
	// 		echo "You did amazing";
	// 		break;

	// 	case 'B':
	// 		echo "You did well enough";
	// 		break;
		
	// 	case 'C':
	// 		echo "You did the average";
	// 		break;

	// 	case 'D':
	// 		echo "You need more instruction";
	// 		break;

	// 	case 'F':
	// 		echo "You failed";
	// 		break;

	// 	default:
	// 		echo "Enter a valid grade";
	// 		break;
	// }

	// $index = 6;

	// do {
	// 	echo "$index <br>";
	// 	$index++;
	// } while ($index <= 10);
	// $luckyNumbers = array(4, 8, 14, 16, 23, 42);

	// for ($i=0; $i < count($luckyNumbers); $i++) { 
	// 	echo "$luckyNumbers[$i] <br>";
	// }

	// include "header.html"
	
	// include "usefulTools.php";
	// sayHi("Matt");
	// echo $feetInMile;


	// class Book
	// {
	// 	var $title;
	// 	var $author;
	// 	var $pages;

	// 	function __construct($aTitle, $aAuthor, $aPages)
	// 	{
	// 		// echo "New book created <br>";
	// 		// echo $name;
	// 		$this->title = $aTitle;
	// 		$this->author = $aAuthor;
	// 		$this->pages = $aPages;
	// 	}
	// }

	// $book1 = new Book("Matt");
	// $book1->title = "Harry Potter and the Philosopher's Stone";
	// $book1->author = "J.K. Rowling";
	// $book1->pages = 223;

	// echo $book1->title;

	// $book2 = new Book("Tom");
	// $book2->title = "The Fellowship of the Ring";
	// $book2->author = "J.R.R. Tolkien";
	// $book2->pages = 450;

	// echo $book2->title;

	// $book1 = new Book("Harry Potter", "J.K. Rowling", 223);
	// $book2 = new Book("The Fellowship of the Ring", "J.R.R. Tolkien", 450);

	// echo $book1->title;
	// echo $book2->pages;

	/**
	 * 
	 */
	// class Student
	// {
		
	// 	var $name;
	// 	var $major;
	// 	var $gpa;
	// 	function __construct($name, $major, $gpa)
	// 	{
	// 		$this->name = $name;
	// 		$this->major = $major;
	// 		$this->gpa = $gpa;
	// 	}

	// 	function hasHonors()
	// 	{
	// 		if ($this->gpa >= 3.5) {
	// 			return "true";
	// 		}
	// 		return "false";
	// 	}
	// }

	// $student1 = new Student("Jim", "Business", 2.8);
	// $student2 = new Student("Pam", "Art", 3.6);

	// echo $student1->hasHonors();
	// echo $student2->hasHonors();

	/**
	 * 
	 */
	// class Movie
	// {
	// 	public $title;
	// 	private $rating;

	// 	function __construct($title, $rating)
	// 	{
	// 		$this->title = $title;
	// 		// $this->rating = $rating;
	// 		$this->setRating = $rating;
	// 	}

	// 	function getRating()
	// 	{
	// 		return $this->rating;
	// 	}

	// 	function setRating($rating)
	// 	{
	// 		// $this->rating = $rating;
	// 		if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R") {
	// 			$this->rating = $rating;
	// 		} else{
	// 			$this->rating = "NR";
	// 		}
	// 	}
	// }

	// $avengers = new Movie("Avengers", "Dog");

	// // $avengers->setRating("Dog");
	// echo $avengers->getRating();


	/**
	 * 
	 */
	class Chef
	{
		
		function makeChicken()
		{
			echo "The chef makes chicken <br>";
		}

		function makeSalad()
		{
			echo "The chef makes salad <br>";
		}

		function makeSpecialDish()
		{
			echo "The chef makes BBQ ribs <br>";
		}
	}

	/**
	 * 
	 */
	class ItalianChef extends Chef
	{
		
		function makePasta()
		{
			echo "The Italian chef makes pasta <br>";
		}

		function makeSpecialDish()
		{
			echo "The chef makes Chicken Parm <br>";
		}
	}

	$chef = new Chef();
	$chef->makeSpecialDish();

	$italianChef = new ItalianChef();
	$italianChef->makeSpecialDish();

	?>
	
<!-- 	// include "footer.html" 

	// $title = "My first post";
	// $author = "Matt";
	// $wordCount = 400;
	// include "articleHeader.php"
 -->
</body>
</html>