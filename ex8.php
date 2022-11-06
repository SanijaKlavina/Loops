<?php
/*class NumberSquare{

}
$numberSquare = new NumberSquare();*/
$min = readline("Min? \n");
$max = readline("Max? \n");

for($row = $min; $row <= $max; $row++){
   for($col = $min; $col <= $max; $col++){
       echo ($row + $col - 1) % $max +1;
   }
   echo "\n";
}