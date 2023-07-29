<?php
require_once("header.php");
?>
<section>
    <div class="formulario">
        <h2> Contacto </h2>
        <!--siempre el for del label tiene que ser identico al name del input-->
        <form action="enviar_consulta.php" method="post">
            <label for="nombre"> Nombre: </label>
            <input type="text" name="nombre" class="contacto_input">
            <label for="apellido"> Apellido: </label>
            <input type="text" name="apellido" class="contacto_input">
            <label for="mail"> Correo: </label>
            <input type="email" name="mail" class="contacto_input">
            <label for="mensaje"> Mensaje: </label>
            <textarea name="mensaje" cols="30" rows="10"class="contacto_input"></textarea>
            <input type="submit" value="Enviar" class="contacto-btn">
        </form>   
    </div>
</section>

<?php
include("footer.php");
?>