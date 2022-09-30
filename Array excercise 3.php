<html>
	<head>
		<title>PHP Array Excercise </title>
	</head>
	
	<body>
		

		<?php

			$dupcount = 0;
			echo "Write a PHP script to count a total number of duplicate elements in an array.  \n";

			echo "Input the number of elements to be stored in the array :";
			$size = (int)readline('Input the number of elements to be stored in the array : ');
			$arrayCon = array($size);
			echo "\n";

			for($i = 1; $i <= $size; $i++){
				$arcon = (int)readline('Enter an integer: ');
				$arrayCon[$i] = $arcon;
			}

			for($i = 0; $i < $size-1;$i++){
			    for($j = $i+1; $j <= $size; $j++){    
					if($arrayCon[$i] == $arrayCon[$j] && $i != $j){
						$dupcount++;
					}
			    }
			}
			echo('Total number of duplicate elements found in the array is : '. $dupcount . "\n");


			//!-----------------------------------------------------------------------------------------------------------------------

			echo "Write a PHP script to count the frequency of each element of an array.  \n";

			echo "\n";
			echo "\n";
			for($i = 0; $i < $size-1;$i++){
			    for($j = $i+1; $j <= $size; $j++){    
					if($arrayCon[$i] == $arrayCon[$j] && $i != $j){
						$dupcount++;
						echo $arrayCon[$j] . "\n";
					}
			    }
			}
			echo('Total number of duplicate elements found in the array is : '. $dupcount . "\n");

			//!-----------------------------------------------------------------------------------------------------------------------
			
		?>
		
	</body>
</html>