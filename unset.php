


<!-- unset()
We can destroy variable by using unset function.
 -->


<?php 
	$my_var = "komol";

	echo $my_var; 

	echo "<br>";
	unset($my_var);
	echo "after unset".$my_var;

 ?>



 Here is an example.
$my_var='plus2net';
echo " before unset : ".$my_var;
echo "<br>";
unset($my_var);
echo "after unset : " .$my_var;
The output is here
before unset : plus2net
after unset  :
Unset function will remove local variable only. For example it can remove only variable inside the function and it does not affect outside the function. Here is one example to understand how unset function work inside function.
$my_var='plus2net';

function unset_var()
{
global $my_var;
echo "Before unset and inside function :".$my_var."<br>";
unset($my_var);
echo "after unset and inside function  :".$my_var."<br>";
}
echo "Outside function before using function : ".$my_var."<br>";
unset_var();
echo "Outside function after using function : ".$my_var."<br>";
Here is the output
Outside function before using function : plus2net
Before unset and inside function :plus2net
after unset and inside function :
Outside function after using function : plus2net
