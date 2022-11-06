<?php
$userNumber = readline("Input number of your choice: \n");
$userN = readline("Input the number of times you want to multiply your first choice: \n");
$answer = 1;
for($n = 0; $n < $userN; $n++){
    $answer = $answer * $userNumber;
}
echo $answer;
echo PHP_EOL;
//echo $userNumber;

