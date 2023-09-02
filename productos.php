<?php
require_once("header.php");
?>
<section class= "cursos">
    <div class="container-xxl">
           <ul>
            <li><a href="productos.php?producto=mb">Motherboard</a></li>
            <li><a href="productos.php?producto=mp">Microprocesador</a></li>
            <li><a href="productos.php?producto=mm">Memoria</a></li>
            <li><a href="productos.php?producto=hd">Disco</a></li>
            <li><a href="productos.php?producto=gb">Gabinete</a></li>
            <li><a href="productos.php?producto=mr">Monitor</a></li>
           </ul>
    </div>

</section>
<?php
if (isset($_GET['producto'])) {
    switch ($_GET['producto']) {
        case 'mb':
            $producto = 'Motherboard';
            $descripcion = 'Placa Madre Gigabyte B550m K Amd Am4, soporte maximo de memoria
            128gb, CPU AMD, socket AM4';
            $img = './imagenes/madre.jpg';
            break;
        case 'mm':
            $producto = 'Memoria';
            $descripcion = 'Memoria RAM Fury Beast DDR4 gamer color negro 8GB 1 
            Kingston KF432C16BB/8';
            $img = './imagenes/memoria.jpg';
            break;
        case 'mp':
            $producto = 'Microprocesador';
            $descripcion = 'AMD Ryzen 5 5600G 100-100000252BOX';
            $img = './imagenes/micro.jpg';
            break;
        case 'gb':
            $producto = 'Gabinete';
            $descripcion = 'Gabinete Gamer Gx580x 6 Coolers Atx Rgb Huntkey';
            $img = './imagenes/gabinete.jpg';
            break;
        case 'mr':
            $producto = 'Monitor';
            $descripcion = 'Monitor Philips Led 24 Pulgadas 241v8l/77 Hdmi Vga';
            $img = './imagenes/monitor.jpg';
            break;
        case 'hd':
            $producto = 'Disco solido';
            $descripcion = 'Disco sólido interno Kingston SA400S37/480G 480GB negro ';
            $img = './imagenes/hd.jpg';
            break;
    }
}
?>
<div class = "productos_descripcion">
    <h2><?php echo $producto; ?></h2>
    <p><?php echo $descripcion; ?></p>
</div>
<div>
    <img src="<?php echo $img; ?>" alt="<?php echo $producto; ?>">
</div>

<?php
require_once("footer.php");
?>