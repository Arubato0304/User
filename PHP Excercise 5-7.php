<?php
	//PHP exercise 5
 
	echo "PHP exercise 5 \n";
	$around = "around"; 
	echo 'What goes ' . $around . ' comes ' . $around . '.'; 
	echo "\n\n";


 
	//PHP exercise 6
	echo "PHP exercise 6 \n";
	$sqr = 0;

	for ($j = 1; $j <= 12; $j++){
		$sqr = $j * $j;
		echo "$j x $j = $sqr \n";
	}
	echo "\n\n\n";



	//PHP exercise 7
 
	echo "PHP exercise 7";
 
	for ( $value1 = 1; $value1 <= 7; $value1++ ) {
		echo "\n\n";
		for ( $value2 = 1; $value2 <= 7; $value2++)

			if($value1 * $value2 < 10){
				echo $value1 * $value2 . "     " ;  
			}else if($value1 * $value2 >= 10){
				echo $value1 * $value2 . "    ";
		}

	}

?>