<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio #04</title>
</head>
<body>


<form action="Ejercicio%20%2304.php" method='POST'>

    Ingrese un numero entre 0 y 9999 : <input name = 'numero'
                               type='number' min='1' max ='9999' >

    <br> <input type='submit' value='Enviar Numero'/>

</form>

</body>
</html>
<?php


if(isset($_REQUEST['numero'])){


    $Numero =  $_POST['numero'];




    echo "Tu numero al reves es ".strrev($Numero);
}

?>