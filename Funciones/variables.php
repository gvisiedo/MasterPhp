<?php
/*
 * Variables locales
 * Variables globales
 * */



//variable global
$frase = "Ni los genios son tan genios ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1> $frase </h1>";

    $year = 2019;
    echo "<h1>$year</h1>";
    return $year;

}

echo holaMundo();

//Funciones Variables


function buenosDias(){
    return "hola buenos dias";
}

function buenasTardes(){
    return "Hey que tal ha ido la comida?";
}

function buenasNoches(){
    return "¿Te vas a dormir ya? Buenas Noches";
}

$horario = "buenasNoches";

echo $horario;
