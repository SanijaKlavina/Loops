<?php


$desiredSum = readline("Desired sum: ");

while(true){
    $rand1 = rand(1,6);
    $rand2 = rand(1,6);
    $result = $rand1 + $rand2;
    echo "{$rand1} + {$rand2} = {$result} \n";
    if($result == $desiredSum){
        break;
    }
    $result++;
}