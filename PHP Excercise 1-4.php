
<?php
//PHP exercise 1
  $variable1 = "Twinkle";
  $variable2 = "star.";
  
  echo "$variable1 , $variable1 little $variable2 \r\n";
  $spikey = "Twinkle";
  $head = "star.";
  echo "$spikey , $spikey little $head \r\n";
  $spikey = "shiny";
  $head = "head.";
  echo "$spikey , $spikey little $head \r\n";
  echo "\r\n";



//PHP exercise 2
  $x = 10;
  $y = 7;
  
  $sum = $x + $y;
  $dif = $x - $y;
  $prod = $x * $y;
  $quot = $x / $y;
  $mod = $x % $y;
  
  echo "$x + $y = $sum \n";
  echo "$x - $y = $dif \n";
  echo "$x * $y = $prod \n";
  echo "$x / $y = $quot \n";
  echo "$x % $y = $mod \n\n\n";

//PHP exercise 3

$variable = 8;

/*
Value is now 8.
Add 2. Value is now 10.
Subtract 4. Value is now 6.
Multiply by 5. Value is now 30.
Divide by 3. Value is now 10.
Increment value by one. Value is now $variable.
Decrement value by one. Value is now $variable.

*/

  echo "Value is now $variable. \n";
  $variable += 2;
  echo "Add 2. Value is now $variable. \n";
  $variable -= 4;
  echo "Subtract 4. Value is now $variable. \n";
  $variable *= 5;
  echo "Multiply by 5. Value is now $variable. \n";
  $variable /= 3;
  echo "Divide by 3. Value is now $variable. \n";
  $variable++;
  echo "Increment value by one. Value is now $variable. \n";
  $variable--;
  echo "Decrement value by one. Value is now $variable.";
  
//PHP exercise 4

 $Name = 'Harry'; 
 $Age = 28;   
  
 var_dump($Name); 
 echo "\r\n";   
 
 print_r($Name); 
 echo "\r\n";   
 
 var_dump($Age); 
 echo "\r\n";  
 
 $Name=Null; 
 
 var_dump($Name); 
  

?>