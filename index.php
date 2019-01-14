<!-- 
1. php syntax written

<?php 

//php code goes here

?> -->

 

 <!-- 

 2. echo and concate 

<?php 
	
	$a = "There is no God except Allah,";
	$b = "And Muhammad (SM) is His messenger";
	$age = 63;
	$math = 12.8;
	$bool = true;
	$null = null;

	echo $a."</br>".$b;

 ?>

  -->


<!--
  3. Variables: </br>

  Variables are "containers" for storing information. </br>

  In php variables starts with $ sign followed by the name of the variabls. </br>

  Think of variabls as a continer for storing data. </br>
  	A variable starts with the $ sign, followed by the name of the variable
	A variable name must start with a letter or the underscore character
	A variable name cannot start with a number
	A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
	Variable names are case-sensitive ($age and $AGE are two different variables)

  <?php 

  	$a = 17;
  	$b = 10.1;
  	$text = "Hello Komol";

  	$c = $a+$b;

  	echo $c;

   ?>

-->

<!--

4. php in html

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		$text = "php in html";

	 ?>

	 <h1><?php echo $text; ?></h1>

</body>
</html>
-->


<!-- <?php 



$a = 10;
$b = 20;
$c = $a+$b;

echo $c;

 ?>
 -->

 <?php 


	$b = array(

		"fayjul" => "1",
		"Azizul" => "2",
		"Manik" => "3",
		"komol" => "4"
	);

	echo "Fayjul's serial is 0".$b['fayjul'];

	echo "</br>";

	echo "He said that, \"Hey Don't hurt him, he is my brother\".";

	echo "</br>";

	echo 'He said that, "Hey don\'t hurt him, he is my brother".';

	echo "<h1>He said that, \"Hey don't hurt him, he is my brother\"</h1>";

	echo "<h1 id=\"top_heading\">He said that, \"Hey don't hurt him, he is my brother\"<h1>"
 ?> 


<!--
5. comments

<?php 
	
	//single line comment
	# this is also single line comment.

	/*this is 
	multiline
	comment

	*/

	// part of code line can be leave out by using comment

	$x = 5+/*10+20*/+19;  
	echo $x;
 ?>















