<html>
	<head>
		<title>Isabelo Array Excercise 2</title>
	</head>
	<body>
		<h1>Isabelo Array Excercise 2</h1>
<?php

			$City = array("Tokyo","Mexico City","New York City","Mumbai",
					"Seoul","Shanghai","Lagos","Buenos Aires","Cairo", "London.");
					
					$number = count($City);
					
					for($i = 0; $i < $number; $i++){
						if ($i <= 8){
							echo $City[$i].', ';
						}else {echo $City[$i];}
					}
					echo "<br/>";
					echo "<br/>";
					sort($City);
					?>
	_______________________________________________________________________________________________________________
					<ul>
						<?php
							for($i = 0; $i < $number; $i++){
								echo "<li>$City[$i]</li>";
							}
						?>
					
	_______________________________________________________________________________________________________________
					
						<?php
							echo "<br/>";
							echo "<br/>";
							$theCity = array("Los Angeles", "Calcutta", "Osaka", "Beijing");
							$Citynew = array_merge($City, $theCity);
							sort($Citynew);
							$number2 = count($Citynew);
							for($i = 0; $i < $number2; $i++){
								echo "<li>$Citynew[$i]</li>";
							}
						?>
					</ul>
	</body>
</html>	
		
