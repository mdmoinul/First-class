
<!-- 
gettype(): Getting type of Variable
There are differnt types of variables used in PHP. We will get the type of variables by using gettype().
gettype($variable)

Here is an example.
$my_var='plus2net';
echo " Type of variable  : ".gettype($my_var);
The output is here
Type of of variable : string
Based on the type of input variable we will get the output. Here is a list of output with example.
Bool : True False ( two values only )
Int : whole numbers like 5 , 356
float(5.6) : with decimal numbers like 5.6, 2. , 3.89
string(12) "plus2net.com" : "plus2net.com"
array : Give more details, see example below
NULL : null data
Difference between var_dump() and gettype()
PHP function var_dump() gives full details of the variable where gettype() only gives the type of variable. In our script we are processing different type of code based on variable type then gettype() can be used as we are only interested in type of the variable. Here are some examples to understand the difference. Output for each type of variables with both the functions are shown. 

-->


<?Php

$my_var = "Nusaiba Haque";

echo "this variable is ".gettype($my_var);
echo "<br>";

echo var_dump($my_var);
echo "<br>";


$my_var=true; 
echo gettype($my_var); // boolean
echo "<br>";
echo var_dump($my_var); // bool(true)

$my_var=5;
echo gettype($my_var); // integer 
echo "<br>";
echo var_dump($my_var); // int(5)

$my_var=5.6;
echo gettype($my_var); //  double
echo "<br>";
echo var_dump($my_var); // flot(5.6)

$my_var='plus2net.com';
echo gettype($my_var); // string 
echo "<br>";
echo var_dump($my_var); // string(12) "plus2net.com"

$my_var=Null;
echo gettype($my_var); //  NULL
echo "<br>";
echo var_dump($my_var); // NULL

$my_var=array('Mango','Banana','Apple');
echo gettype($my_var); //  array 
echo "<br>";
echo var_dump($my_var); 
//array(3) { [0]=> string(5)"Mango" [1]=> string(6) "Banana" [2]=> string(5) "Apple" }
?>