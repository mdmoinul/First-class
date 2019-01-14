<?php 

	$var1 = 75;
	$var2 = 35;

	function first_globals (){
		$GLOBALS['var3'] = $GLOBALS['var1'] + $GLOBALS['var2'];
	}

	first_globals ();
	echo $var3."<br/>";


	$var5 = 200;

	function second_globals (){
		$GLOBALS['var6'] = $GLOBALS['var3']+$GLOBALS['var5'];

		
	}

	second_globals ();
	echo $var6;
	
 



 