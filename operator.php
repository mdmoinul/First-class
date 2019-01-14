<?php 

/*

Operators are used to perform operations on variables and values.

PHP divides the operators in the following groups:

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators

*/

// Arithmetic operators: 

// addition: +

$x = 21;
$y = 10;

echo ($x+$y)."-->Addition";

echo "</br>";


// Subtraction: -

echo ($x-$y)."-->Subtraction";
echo "</br>";

// Multiplication: *

echo ($x * $y)."-->Multiplication";
echo "</br>";

// Division: /

echo ($x / $y)."-->Division";
echo "</br>";


// Modulus: %

echo ($x % $y)."-->Modulus";
echo "</br>";

// Exponentiation: **

echo ($x ** 10)."-->Exponential";
echo "</br>";

// Assignment operators:
// =

$a = 100;
$a += 50;
echo $a."-->Assignment operators (=)";
echo "</br>";


echo $a."-->Assignment operators (+=)";
echo "</br>";

$a = 100;
$a -= 50;
echo $a."-->Assignment operators (-=)";
echo "</br>";

$a = 100;
$a *= 50;
echo $a."-->Assignment operators (*=)";
echo "</br>";

$a = 100;
$a /= 50;
echo $a."-->Assignment operators (/=)";
echo "</br>";

$a = 101;
$a %= 50;
echo $a."-->Assignment operators (%=)";
echo "</br>";


$a = 10;
$a **= 5;
echo $a."-->Assignment operators (**=)";
echo "</br>";

// Assignment operators ends-->

// Comparison operator -->

$p = 20;
$q = "20";

var_dump($p == $q);
echo "</br>";

var_dump($p === $q);
echo "</br>";

var_dump($p != $q);
echo "</br>";


var_dump($p !== $q);
echo "</br>";

$r = 30;
$s = 40;
var_dump($r > $s);
echo "</br>";

var_dump($r >= $s);
echo "</br>";

var_dump($r < $s);
echo "</br>";

var_dump($r >= $s);
echo "</br>";

var_dump($r < $s);
echo "</br>";

var_dump($r <> $s);
echo "</br>";

// increment/decrement operator:

echo ++$r;
echo "</br>";


$r = 28;
echo $r++;
echo "</br>";


$t =40;
echo --$t;
echo "</br>";

$v = 35;

echo $v--;
echo "</br>";






?>