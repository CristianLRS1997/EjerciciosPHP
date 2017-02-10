<?php

$Dias = 800;
$Horas = $Dias * 24; //Horas
$Minutos = $Horas * 60; //Minutos
$Segundos = $Minutos * 60; //Segundos


$Velocidad = 299792.458; //Km/Segundo
$Distancia =($Velocidad * $Segundos);

echo "La distancia recorrida en ".$Dias."dias en de ".$Distancia."Kilometros";