<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    h1{
        text-align:center;
    }

    table{
        background-color:#FFC;
        padding: 5px;
        border: #666 5px solid;
    }

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
</head>
<body>
    <h1>USANDO FUNCIONES COMPARACION </h1>
<form action="validacion.php" method="post" name= "datosUsuario" id = "datosIngresados">
    <table width= "15%" align="center">
    <tr>
        <td>Nombre:</td>
        <td>
            <label for="nombreUsuario"></label>
            <input type="text" name="nombreUsuario" id="nombreIngresado">
        </td>
    </tr>
    <tr>
        <td>Edad:</td>
        <td>
            <label for="edadUsuario"></label>
            <input type="text" name="edadUsuario" id="edadIngresado">
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td> 
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" name="enviando" id="enviando" value="enviar">
         </td>
    </tr>
</table>
</form>

</body>
</html>