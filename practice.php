
<!-- echo practice 
<?php 


	echo "<h2>Hello php!</h2>";

	echo "--------------------";
	echo "<br>";
	echo "Hello World";
	echo "<br>";
	echo "it's about echo";
	echo "<br>";
	echo "This ", "will ", "join ", "multiple ","words.";
	echo "<br>";
	echo 'Hello World';
	echo "<br>";
	echo "Hey! It's me!";
	echo "<br>";
	echo "He said that, \"Hey, It's my car!\"";
	echo "<br>";
	echo 'He said that, "Hey, It\'s my car!"';

 ?>

 <?php 

	echo " <h2>Hello php</h2> ";
	$txt = "Hello php";
	echo "<br>";

	echo "<h2>",$txt,"</h2>","</br>";
	$x = 100;
	$y = 200;

	echo ($x+$y);
 ?>
 -->
<!-- <?php 

$txt = "Hello php!";
$x = 10;
$y = 20;
print "<h3>Hello php</h3>";
print "<h3>".$txt."</h3>"."<br>";
print '<h3>'.$txt.'</h3>'.'</br>';

print $x+$y;

 ?> -->
<!-- concate practice -->

<!-- <?php 

	$first_name = "Md. Moinul";
	$last_name = "Komol";

	echo $first_name." ".$last_name."<br>";

	echo "My full name is: ".$first_name." ".$last_name;

 ?> -->



 <!-- <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php 

 		$x = "php in html? ";
 		$y = "Of course! That's possible!";

 		echo $x.$y;

 	 ?>
 </body>
 </html>
 -->

 <!-- <!DOCTYPE html>
 <html>
 <head>
 	<title>It's all about comment</title>
 </head>
 <body>
 	<?php 

 		// This is single line comment.
 		# This is also single line comment.

 		/*this is 
 		multiple lines
 		comment
 		*/

 		$x = 5+10/*+30+20*/+20;
 		// part of code also can be leave out by using comment.

 		echo $x;
 	 ?>
 </body>
 </html> -->

<!-- <?php 

	$x = 2;
	$y = 2.1;
	$z = TRUE;

	$a = array('1','2','3','4' );
	$b = array (5, 6, 7, 8);

	var_dump($x,"<br>", $y,"<br>",$z, "<br>",$a,"<br>", $b);
 ?> -->
<!-- 
<?php 
	
	$text = "Hello world!";
	echo md5($text, TRUE);

 ?>
 -->

<!-- <?php 

	

	function test () {

		$xxx = 5;

		echo "<p>variable xxxx inside the function: $x</p>";
	}

	test();

	echo "<p> variable xxx outside the function: $x</p>"."<br>";

 ?>

 -->

 <?php 

	
	function test (){

		$x = 5;

		echo "<h2> variable x inside the function: $x</h3>";
	}

	test();

	echo "<h2> variable x outside the function: $x</h3>";

 ?>
















