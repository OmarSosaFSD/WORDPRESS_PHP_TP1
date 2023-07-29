<?php
//while
$i=2;

while ($i <= 10) {
    echo $i++;
}
$numero = 15;
$impares = 0;
$pares = 0;

while ($numero > 0) {
    if ($numero % 2 == 0) {
        echo "El $numero es un numero par <br>";
        $pares++;
    } else {
        echo "El $numero es un numero impar <br>";
        $impares++;
    }
    $numero--;
}
echo "Cantidad de numeros pares $pares";
echo "Cantidad de numeros impares $impares";

//for

for ($i=0; $i < 5; $i++) { 
    //inicializacion, condicion y actualizacion
    echo "<br> HOla <br>";
    echo $i;
    if ($i == 5) {
        break;
    }

}






?>