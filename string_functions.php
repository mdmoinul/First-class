<?php 

// string reverse
$a = "I Love Bangladesh";
$f = "Fayjul, Aziz, Manik, Komol";

echo strrev ($a);

echo "</br>";

// strlen

echo strlen ($a);

echo "</br>";

// str_word_count

echo str_word_count ($a);
echo "</br>";

// str_replace

echo str_replace("Bangladesh", "You", $a);
echo "</br>";

// md5

$password = "komol";
echo md5($password);
echo "</br>";

// sha1
$password = "komol";
echo sha1($password);
echo "</br>";

$sim_text_1 = "I Love Bangladesh";
$sim_text_2 = "I Love You";

echo similar_text($sim_text_1, $sim_text_2, $percent);

echo "</br>";


// explode: breaks a string into an arry


print_r (explode(" ", $a));
echo "</br>";

print_r (explode(",", $f));
echo "</br>";

// implode: joins pieces of an array into a string
$implode = array("I","Love","Bangladesh.");

echo implode("=", $implode);
echo "</br>";





 ?>