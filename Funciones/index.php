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