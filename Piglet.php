<?php

$rolls = 1;
while($rolls <= 3){
    $randomNumber = rand(1,9);
    $score = 0;
    $enter = readline(" Roll your dice! Enter 'y': \n");


    if($enter !== "Y" && $enter !== "y" ){
        echo "Invalid letter \n";
        exit;
    }
    if($randomNumber == 1){
        echo "You got zero points. \n";
        exit;
    } else {
        echo $score = $score + $randomNumber. "\n";
    }
    $rolls++;
}

