<?php
$i = 0;
do{
    if($i == 0){
        echo "$i - это 0<br>";
    } else {
        $chet = ($i % 2 == 1) ? "нечетное " : "четное ";
        echo "$i - ".$chet."число<br>";
    }
    $i++;
} while($i <= 100);