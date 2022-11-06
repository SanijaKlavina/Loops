<?php

class AsciiFigure {
   const NUM = 3;
   public function loopingAscii(){
       for($i = 1; $i <= self::NUM; $i++){
           for($j = 1; $j <= (2*self::NUM); $j++){
               if($j >= self::NUM - ($i - 2) && $j <= self::NUM + ($i - 1)){
                   echo "*";
               } else if($j < self::NUM - ($i - 2)){
                   echo "/";
               } else {
                   echo  "\\";
               }

           }
           echo PHP_EOL;
       }
   }
}
$ascii = new AsciiFigure();
$ascii->loopingAscii();

