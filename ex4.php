<?php
class FizzBuzz {
    public $userNumber;
    public function __construct($userNumber){
        $this->userNumber = $userNumber;
    }
    public function do_Fizz(){
        for($i = 1; $i <= $this->userNumber; $i++ ){

            if($i % 5 === 0 && $i % 3 === 0){
                echo "fizzbuzz,";
            } else if($i % 5 === 0){
                echo "buzz,";
            } else if($i % 3 === 0){
                echo "fizz,";
            } else {
                echo $i. ",";
            }
            if($i % 20 === 0){
                echo " \n";
            }
        }
    }
}
$enterNum = readline("Enter a number: ");
$fizzGame = new FizzBuzz($enterNum);
$fizzGame->do_Fizz();