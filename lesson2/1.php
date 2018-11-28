<?
$a = rand(-100, 100);
$b= rand(-100, 100);
echo 'a = '.$a."<br> b = ".$b."<br>";
if($a > 0 && $b > 0){
    $res = $a - $b;
    echo 'a – b = '.$res;
} elseif ($a < 0 && $b < 0){
    $res = $a * $b;
    echo 'a * b = '.$res;
} else {
    $res = $a + $b;
    echo 'a + b ='.$res;
}