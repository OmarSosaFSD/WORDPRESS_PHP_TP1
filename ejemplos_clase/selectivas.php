<?php
//if, elseif, else, switch case

$a = 97;
$b = 2;

if ($a > $b) {
    echo $a . " es mayor que " . $b . "<br>";
}
elseif ($a < $b){
    echo $a . " es menor que " . $b . "<br>";
}
else {
    echo $a . " es igual que " . $b . "<br>";
}

//switch case

$i=56;
 switch ($i) {
    case 0:
    echo "i es igual a 0";
    break;
    case 1:
    echo "i es igual a 1";
    break;
    case 56:
    echo "i es igual a 56";
    break;
    default:
    echo "Keep moving";
 }




?>