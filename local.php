<!-- <?php 

	$text = array('I', 'Love','my','country');
	echo "He said that, \""."$text[0]"." "."$text[1]"." "."$text[2]"." "."$text[3]"."\".";

	echo "<br>";

	$arrlength = count($text);

	echo count($text).'<br>';

	for ($i=0; $i < $arrlength; $i++) { 
		
			echo $text [$i];
			echo '<br>';

		}
 ?> -->


<!-- <?php 

 	$age = array("Alif" => "12","Mim" => "10", "Tosin" => "4");

 	foreach ($age as $x => $x_value) {
 		
 		echo $x.":".$x_value;

 		echo "<br>";

 		echo "Alif's age is".$age['Alif'];
 	}

  ?>  -->

  <?php 

  	$class = array (

  					array("one",30,20),
  					array ("two",40,15),
  					array("three",40,20)

  					);

  	// echo "There are ".$class[0][1]." boys and ".$class[0][2]." girls in class ".$class[0][0]."<br>";
  	// echo "There are ".$class[1][1]." boys and ".$class[1][2]." girls in class ".$class[1][0]."<br>";
  	// echo "There are ".$class[2][1]." boys and ".$class[2][2]." girls in class ".$class[2][0];

  	for ($row = 0; $row < 3; $row++){
  		echo "<b> row number $row </b>";

  		echo "<ul>";
  		for ($col = 0; $col<3; $col++){
  			echo "<li>".$class[$row][$col]."</li>";
  		}

  		echo "</ul>";
  	}



   ?>




<!-- <?php 


	$name = "Md,Moinul,Hoque,Komol";
	print_r(explode(",", $name)) ;

	// Array ( [0] => Md [1] => Moinul [2] => Hoque [3] => Komol ) 

	echo "<br>";
	
	$full_name = Array ("Md","Moinul","Hoque","Komol" );

	echo implode(" ", $full_name);

	// Md Moinul Hoque Komol

	echo "<br>";


	$text = array("Coders", "Trust","Success","Story.");
	echo implode(" ", $text);

 ?> -->


 <!-- <?php 

 	define("GREETINGS", "Welcome to learn constants.");

 	// echo GREETINGS."<br>";	

 	// echo greetings."<br>";

 	// define("GREETINGS", "Welcome to learn constants.", TRUE);

 	// echo GREETINGS."<br>";	
 	// echo greetings;


 	function my_test(){
 		echo GREETINGS;
 	}

 	my_test();


  ?>
 -->

<!-- <?php 

	$var1 = "Hello!";

	$var2;


	unset($var1);
	if (isset($var1)){
		echo "var1 is set";
	}else{
		echo "var1 is not set";
	};

	echo "<br>";
	if (isset($var2)) {
		echo "var2 is set";
	}else{
		echo "var2 is not set";
	};
 ?>
 -->
<!-- <?php 

	$var = "Learn unset() function.";

	echo "before using unset() function:".$var."<br>";

	unset($var);

	echo "After using unset() function:".$var;


 ?> -->


 <?php 

 	$variable;

 	if (isset($variable)){

 		echo "variable is set";

 	} else{
 	 
 		echo "variable isn't set";

 	}
  ?>
 



