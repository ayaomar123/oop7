<?php include 'person.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	//using objects
		// $person1 = new Person();
		// $person1->setName("Aya");
		// echo $person1->name;
		//
		// $person2 = new Person();
		// $person2->setName("Omar");
		// echo $person2->name;
		// $person1 = new Person("Aya" , "Blue" , 22);
		// // echo $person1->name;
		// // echo $person1->eyeColor;
		// // $person1->setName("Omar");
		// // echo $person1->name;
		// echo $person1->getName();
		echo Person::$drinkingAge;
		Person::setDrinkingAge(18);
		echo Person::$drinkingAge;

	?>

</body>
</html>
