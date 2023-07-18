<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores</h1>
    <?php
    //operadores aritmeticos




    //En PHP, los operadores aritméticos son símbolos especiales utilizados para realizar operaciones matemáticas en variables y valores numéricos. Estos operadores permiten realizar las operaciones básicas de la aritmética, como suma, resta, multiplicación y división, entre otros.

    //Suma (+): El operador de suma se utiliza para sumar dos valores o variables.

    //Resta (-): El operador de resta se utiliza para restar un valor o variable de otro.

    //Multiplicación (*): El operador de multiplicación se utiliza para multiplicar dos valores o variables.

    //División (/): El operador de división se utiliza para dividir un valor o variable por otro.

    //Módulo (%): El operador de módulo se utiliza para obtener el resto de una división entre dos valores.

    //Incremento (++): El operador de incremento se utiliza para aumentar el valor de una variable en una unidad.

    //Decremento (--): El operador de decremento se utiliza para disminuir el valor de una variable en una unidad.

    //ejemplos
    echo"<h2>operadores aritmeticos</h2>";

    $numero1 = 10;
    $numero2 = 5;
    
    // Operador de suma (+)
    $suma = $numero1 + $numero2;
    echo "La suma de $numero1 y $numero2 es: $suma"; // Esto imprimirá: "La suma de 10 y 5 es: 15"
    
    // Operador de multiplicación (*)
    $multiplicacion = $numero1 * $numero2;
    echo "El resultado de multiplicar $numero1 por $numero2 es: $multiplicacion"; // Esto imprimirá: "El resultado de multiplicar 10 por 5 es: 50"
    
    // Operador de división (/)
    $division = $numero1 / $numero2;
    echo "El resultado de dividir $numero1 entre $numero2 es: $division"; // Esto imprimirá: "El resultado de dividir 10 entre 5 es: 2"
    
    // Operador de resta (-)
    $resta = $numero1 - $numero2;
    echo "La resta de $numero1 y $numero2 es: $resta"; // Esto imprimirá: "La resta de 10 y 5 es: 5"
    
    // Operador de módulo (%)
    $modulo = $numero1 % $numero2;
    echo "El módulo de $numero1 entre $numero2 es: $modulo"; // Esto imprimirá: "El módulo de 10 entre 5 es: 0"
    

    //operadores de comparación
    echo "<h2>operadores de comparación</h2>";


    //Los operadores de comparación en PHP son símbolos utilizados para comparar dos valores o variables y producir un resultado booleano (verdadero o falso) que indica si la comparación es cierta o falsa. Algunos de los operadores de comparación más comunes en PHP son:

    //Igual (==): Comprueba si dos valores son iguales.

    //No igual (!= o <>): Comprueba si dos valores no son iguales.

    //Idéntico (===): Comprueba si dos valores son iguales y del mismo tipo de dato.

    //No idéntico (!==): Comprueba si dos valores no son iguales y/o no son del mismo tipo de dato.

    //Mayor que (>): Comprueba si un valor es mayor que otro.

    //Menor que (<): Comprueba si un valor es menor que otro.

    //Mayor o igual que (>=): Comprueba si un valor es mayor o igual que otro.

    //Menor o igual que (<=): Comprueba si un valor es menor o igual que otro.

    //Estos operadores son fundamentales para tomar decisiones basadas en comparaciones en programas PHP y permiten realizar lógica condicional, como en estructuras if-else y bucles.

    //ejemplo:

    $numero1 = 10;
    $numero2 = 5;

    // Operador de igualdad (==)
    if ($numero1 == $numero2) {
        echo "Los números son iguales.";
    } else {
        echo "Los números no son iguales.";
    }

    // Operador de mayor que (>)
    if ($numero1 > $numero2) {
        echo "El primer número es mayor que el segundo.";
    } else {
        echo "El primer número no es mayor que el segundo.";
    }

    // Operador de menor que (<)
    if ($numero1 < $numero2) {
        echo "El primer número es menor que el segundo.";
    } else {
        echo "El primer número no es menor que el segundo.";
    }


    //operadores lógicos
    
    

    //los operadores lógicos en PHP son utilizados para combinar o modificar expresiones booleanas y determinar la veracidad o falsedad de una condición más compleja. Los operadores lógicos más comunes en PHP son:

    //AND (&&): El operador AND devuelve verdadero si todas las expresiones que conecta son verdaderas.
        
    //OR (||): El operador OR devuelve verdadero si al menos una de las expresiones que conecta es verdadera.
        
    //NOT (!): El operador NOT se utiliza para negar una expresión booleana, es decir, si la expresión es verdadera, NOT la convierte en falsa y viceversa.
        
    //Estos operadores son muy útiles para construir condiciones más complejas al combinar múltiples expresiones booleanas.

    //ejemplo:
    echo"<h2>operadores lógicos</h2>";
    $edad = 25;
    $es_estudiante = true;

    if ($edad >= 18 && $es_estudiante) {
        echo "Eres mayor de edad y eres estudiante.";
    } elseif ($edad >= 18 || $es_estudiante) {
        echo "Eres mayor de edad o eres estudiante.";
    } else {
        echo "Eres menor de edad y no eres estudiante.";
    }   

    //operadores de unión de cadenas

    echo "<h2>operadores de unión de cadenas </h2>";
    //En PHP, los operadores de unión de cadenas se utilizan para concatenar (unir) varias cadenas en una sola. El operador de unión de cadenas es el punto (.) y permite combinar cadenas de texto para formar una nueva cadena más larga.
    $nombre = "Kevin";
    $apellido = "Solano";
    
    // Unir cadenas usando el operador de unión (.)
    $nombre_completo = $nombre . " " . $apellido;
    echo $nombre_completo; // Esto imprimirá: "Juan Pérez"
    //En el ejemplo anterior, utilizamos el operador de unión (.) para concatenar las variables $nombre y $apellido, separándolas con un espacio en blanco, lo que resulta en la cadena completa "Juan Pérez".

    //Recuerda que también puedes combinar constantes o cadenas de texto directamente dentro del operador de unión, no solo variables. Esto te permite crear cadenas más complejas a partir de diferentes partes de texto.
    

    ?>
</body>
</html>