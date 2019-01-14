<?php 
	

	// indexedarray

 	$index = array(1,2,3,4);
 	$br = "</br>";


 	echo $index[0]."(index array)";
 	echo "</br>";

	// Associative array
	$b = array(

		"fayjul" => "1",
		"Azizul" => "2",
		"Manik" => "3",
		"komol" => "4"
	);

	echo "Fayjul's serial is 0".$b['fayjul']."(associative array)";
	echo "</br>";


	// multidimensional array

	$multi = array(

		array("Fayjul", 50, "Comilla"),
		array("Aziz", 40, "Dharmapur"),
		array("Manik", 35, "Fenua"),
		array("Komol", 33, "Narsingdi")
	);

	echo $br.$multi[3][0]. " lives in ".$multi[3][2].". His age is about ".$multi[3][1]. " years!"."(multidimensional array)";
	echo $br.$multi[2][0]. " lives in ".$multi[2][2].". His age is about ".$multi[2][1]. " years!"."(multidimensional array)";
	echo $br.$multi[1][0]. " lives in ".$multi[1][2].". His age is about ".$multi[1][1]. " years!"."(multidimensional array)";
	echo $br.$multi[0][0]. " lives in ".$multi[0][2].". His age is about ".$multi[0][1]. " years!"."(multidimensional array)";
 ?> 



