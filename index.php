<?php
require_once("header.php");
?>
    <div class="precios">
        <?php
        
        $precioDolar = 490;
        $memoria = 23670;
        $mother = 153439;
        $micro = 147399;
        $gabinete = 34299;
        $monitor = 46299;
        $totalPesos = $memoria + $mother + $micro + $gabinete + $monitor;
        $totalDolares = $totalPesos / $precioDolar;

        ?>
        <h1>Lista de precios</h1>
        <ul>
            <li><h3>Gabinete Sentey 4C = <?php echo $gabinete;?></h3></li>
            <li><h3>Monitor Gamer Phillips 4k = <?php echo $monitor;?></h3></li>
            <li><h3>Motherboard Asus AM4 = <?php echo $mother;?></h3></li>
            <li><h3>Micro AMD RYZEN 5 = <?php echo $micro;?></h3></li>
            <li><h3>Memoria Fury 16gb = <?php echo $memoria;?></h3></li>
        </ul>
        
        
    </div>
    <div class = "compra">
    <h1>Lista de Compra</h1>
        <ul>
            <li><h3>Gabinete Sentey 4C - x1 = <?php echo $gabinete;?><h3></li>
            <li><h3>Monitor Gamer Phillips 4k - x2 = <?php echo $monitor*2;?><h3></li>
            <li><h3>Motherboard Asus AM4 - x1 = <?php echo $mother;?><h3></li>
            <li><h3>Micro AMD RYZEN 5 - x1= <?php echo $micro;?><h3></li>
            <li><h3>Memoria Fury 16gb - x2 = <?php echo $memoria*2;?><h3></li>
        </ul>
    </div>
    <div class = "totales">
        <h2>Total Pesos: $<?php echo $totalPesos;?></h2>
        <h2>Total Dolares ($490): u$s<?php echo round($totalDolares);?></h2>
    </div>
<?php
include("footer.php");
?>