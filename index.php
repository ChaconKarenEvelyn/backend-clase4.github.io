<?php

    //Ejercicio 1:

    $variablen = 7;
    if ($variablen > 0) {
    echo "El número ingresado es un número positivo";
    }
    echo "<br>";
    $variablen1 = -6;
    if ($variablen1 > 0) {
    echo "El número ingresado es un número positivo";
    }
    echo "<br>";

    //Ejercicio 2:

    $n = 8;
    if ($n > 1 && $n < 10) {
        echo "El número ingresado es mayor a 1 y menor a 10";
    }
    $n = 28;
    if ($n > 1 && $n < 10) {
        echo "El número ingresado es mayor a 1 y menor a 10";
    }
    echo "<br>";
    echo "<br>";

    //Ejercicio 3:

    $n = 15;
    if ($n < 2 or $n >= 10) {
        echo "El número ingresado es mayor o igual a 10 o menor a 2";
    }
    else {
        echo "El número ingresado no pudo ser validado";
    } 
    echo "<br>";

    $n3 = 5;
    if ($n3 < 2 or $n3 >= 10) {
        echo "El número ingresado es mayor o igual a 10 o menor a 2";
    }
    else {
        echo "El número ingresado no pudo ser validado";
    } 
    echo "<br>";
    echo "<br>";
    
    //Ejercicio 4:

    $numero1 = 1;
    $numero2 = 2;

    if($numero1 > $numero2) {
        echo $numero1 + $numero2; 
        echo "<br>";
        echo $numero1 - $numero2;
    }
    else{
        if ($numero1 == $numero2) {
        echo "Los números ingresados son iguales";
        }
        else {
        echo $numero1 * $numero2;
        echo "<br>";
        echo $numero1 / $numero2;
        echo "<br>";
        echo $numero1 % $numero2;
        }
        echo "<br>";
    }

?>