<html>
	<head>
		<title>Isabelo Array Excercise 2</title>
	</head>
	<body>
		<h1>Isabelo Array Excercise 2</h1>
<?php

			$City = array("Tokyo","Mexico City","New York City","Mumbai",
					"Seoul","Shanghai","Lagos","Buenos Aires","Cairo", "London");
					
					$number = count($City);
					
					for($x = -1; $x < $number; $x++){
						
						if($x == -1){
							echo "              ";
						}else if ($x <= 8){
							echo $City[$x].',  ';
						}else {echo $City[$x];}
					}
					echo ". ";
					echo "<br/>";
					sort($City);
					?>
	_____________________________________________________________________________________________
					<ul>
						<?php
							for($x = 0; $x < $number; $x++){
								echo "<li>$City[$x]</li>";
							}
						?>
					</ul>
	_____________________________________________________________________________________________
					<ul>
						<?php
							echo "<br/>";
							echo "<br/>";
							$newCity = array("Los Angeles", "Calcutta", "Osaka", "Beijing");
							$Cityadd = array_merge($City, $newCity);
							sort($Cityadd);
							$numbers = count($Cityadd);
							for($x = 0; $x < $numbers; $x++){
								echo "<li> $Cityadd[$x] </li>";
							}
						?>
					</ul>
	</body>
</html>	
		
