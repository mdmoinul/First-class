
<!-- 
PHP | is_int()
is_int() is an inbuilt function in php. The is_int() function is used to test whether the type of the specified variable is an integer or not.

Syntax:

boolean is_int($variable_name)
Parameter: this function contains a single parameter 
$variable_name: the variable we want to check.
Return value : it is a boolean function so returns TRUE when $variable_name is an integer, otherwise FALSE. 
-->

<!--
<?php 
$variable_name1 = 56; 
$variable_name2 = "xyz"; 
  
if (is_int($variable_name1)) 
{ 
    echo "$variable_name1 is Integer \n"."<br>" ; 
} 
else
{ 
    echo "$variable_name1 is not an Integer \n" ; 
} 
if (is_int($variable_name2)) 
{ 
    echo "$variable_name2 is Integer \n" ; 
} 
else
{ 
    echo "$variable_name2 is not Integer \n" ; 
} 
?> 

-->

<?php 

	$var1 = 1000;

	$var2 = "10.01";


	if(is_int($var2)){
		echo "$var1 is integer";

	}
	elseif (is_float($var2)) {
		echo "$var2 is float";
	}
	else
	{
		echo "$var2 is not integer";
	}

	echo "<br>";

$result = is_float($var2);

echo var_dump($result);
 ?>




















