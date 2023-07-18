<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
    <h1>Estructuras de control</h1>
    <?php
    //if , if-else
    //while
    //do while
    //for
    //require
    //include
    //switch

    echo "<h1>if, if-else</h1>";
    Estructura de control if:
    La estructura if es una sentencia de control de flujo que permite ejecutar un bloque de código solo si una condición específica se cumple (es verdadera). Si la condición es falsa, el bloque de código no se ejecuta y el programa continúa con la siguiente instrucción después del bloque if. La estructura if se representa con la siguiente sintaxis:
    php

    if (condicion) {
    // Código a ejecutar si la condición es verdadera
    }
    La condicion es una expresión que se evalúa a verdadero o falso (booleano). Si la condición es verdadera, se ejecutará el bloque de código que sigue al if.

    Ejemplo:


    $edad = 25;

    if ($edad >= 18) {
        echo "Eres mayor de edad.";
    }
    //En este ejemplo, si la variable $edad es mayor o igual a 18, se imprimirá "Eres mayor de edad".

    //Estructura de control if-else:
    //La estructura if-else es una extensión del if y permite ejecutar un bloque de código cuando la condición del if es verdadera y otro bloque de código cuando la condición es falsa. La sintaxis de la estructura if-else es la siguiente:

    if (condicion) {
        // Código a ejecutar si la condición es verdadera
    } else {
        // Código a ejecutar si la condición es falsa
    }
    //En este caso, si la condicion del if es verdadera, se ejecutará el bloque de código dentro del if. De lo contrario, si la condicion es falsa, se ejecutará el bloque de código dentro del else.

    //Ejemplo:


    $edad = 15;

    if ($edad >= 18) {
        echo "Eres mayor de edad.";
    } else {
        echo "Eres menor de edad.";
    }
    //En este ejemplo, si la variable $edad es mayor o igual a 18, se imprimirá "Eres mayor de edad". De lo contrario, se imprimirá "Eres menor de edad".

    //Las estructuras de control if y if-else son fundamentales para crear lógica condicional en tus programas PHP y te permiten tomar decisiones basadas en condiciones específicas, adaptando el comportamiento del programa según las circunstancias. Puedes combinar múltiples estructuras if y if-else para realizar lógica más compleja y abordar diferentes escenarios en tus programas.


    ?>
</body>
</html>