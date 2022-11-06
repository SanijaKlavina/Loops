<?php
$firstWord = readline(" Enter the first word:\n" );
$secondWord = readline(" Enter the second word:\n" );
$dots = ".";

$dotsNeeded = 30 - strlen($firstWord) - strlen($secondWord);

echo $firstWord;
for($dot = 0; $dot <= $dotsNeeded; $dot++){
    echo $dots;
}
echo $secondWord;
echo PHP_EOL;
