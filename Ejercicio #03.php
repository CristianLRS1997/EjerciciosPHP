<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ejercicio #03 </title>
</head>

<body>

<form id="form1" name="form1" method="post" action="Ejercicio%20%2303.php">



    <p></p>
    <label>Ingrese el valor del radio : </label>
    <input type="text" name="Radio" id="Radio" />
    <label for="opcion"><br />
        <br />
        opciones :  </label>
    <select name="opcion" id="opcion">
        <option value="1">Circulo</option>
        <option value="2">Longitud</option>
    </select>
    </p>
    <br>
    <input type="submit" name="Enviar" id="Enviar" value="Enviar" />
    </br>
    <p>

        <label for="Resultado">
    </p>
</form>
<?php
if (!empty($_POST["opcion"])) {
    $Radio = $_POST["Radio"];
    $Area = M_PI * ($Radio * $Radio);
    $Longitud = 2 * $Radio;

    $opc = $_POST["opcion"];
    if ($opc == 1){
        echo"El area del circulo es:<h2> $Area</h2><br/>";
    }else {
        echo"La longitud de la circunferencia es:<h2> $Longitud</h2><br/>";
    }
}

?>
</body>
</html>
