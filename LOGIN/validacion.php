<style>
.invalido{
        font-size: 18px;
        color: #F00;
        font-weight:bold;
    }

    .validado{
        font-size: 18px;
        color: #0c3;
        font-weight:bold;
    }

</style>

<?php>
if(isset($_POST["enviando"])) //SI SE APRETO EL BOTON DE ENVIAR
{
        $nombre = $_POST["nombreIngresado"];
        $edad = $_POST["edadIngresado"];

        if($nombre == "Romeo")
        {
            echo "<p class='validado'>Hola Romeo, mi amor <3 </p>";
        }
}

<?>