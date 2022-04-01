<?php
// Funciones

//Ejemplo 1

function muestraNombres(){
    echo "Victor Robles <br>" ;
    echo "Victor Robles <br>" ;
    echo "Victor Robles <br>" ;
    echo "Victor Robles <br>" ;
}
echo  "<br>";
muestraNombres();

//Ejemplo 2

function tabla($numero){
    echo "<h3> Tabla de multiplicar del numero: $numero</h3>";
    for($i=1;$i<=10;$i++){
        $operacion=$numero*$i;
        echo "$numero x $i = $operacion <br/>";
    }
}

tabla(55);
if(isset($_GET[$numero])) {
    tabla($_GET[$numero]);
}else{
    echo "No hay numero para sacar la tabla";

}
echo "<br>";

// ejemplo 3

function calculadora($numero1,$numero2){
    $suma = $numero1+$numero2;
    $resta= $numero1-$numero2;
    $multi=$numero1*$numero2;
    $division=$numero1/$numero2;

    echo "Suma: $suma<br>";
    echo "Resta: $resta<br>";
    echo "Multi: $multi<br>";
    echo "Division: $division<br>";
}

calculadora(55,22);
//ejemplo 4

function devuelveNombre($nombre){
    return "El nombre es: $nombre";
}
echo devuelveNombre("Juan");

// Ejemplo 5
function devuelveNombre1($nombre, $apellido){
    $texto= "El nombre es: $nombre"."<br>"."Los apellidos son: $apellido";
    return $texto;
}
echo devuelveNombre("Juan", "Perez");


