<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>

    <?php


    echo "<h1>Aritmético</h1>";
    /*Aritmetico Operadores 
    Suma:+
    Resta:-
    Multiplicación:*
    División:/
    Módulo:%
    Incremento:++
    Decremento:--
    Exponenciación:**
    */
    echo "<b><h1>";

    
    $x=9;
    echo ("x=".$x."<br>");
    $y=3;
    echo ("y=".$y."<br>");

    $z=5;
    echo ("z=".$z."<br>");

    $suma=$x+$y;
    echo ("suma=".$suma."<br>");

    $resta=$x-$z;
    echo ("resta=".$resta."<br>");

    $multiplicacion=$suma*$resta;

    echo ("multiplicacion=".$multiplicacion."<br>");

    $final=$multiplicacion++;
    echo ("final=".$final."<br>");

    echo ("multiplicacion=".$multiplicacion."<br>");


    echo "</b></h1>";

    echo "<h1>Operadores de Comparación</h1>";
    //Igual:==
    //Identico:===
    //Diferente:!=
    //Mayor:>
    //Menor:<
    //Menor o igual:<=
    //Mayor o igual:>=

    $x=5;
    $y=4;
    echo ($x==$y);
    echo ($x>=$y);


    echo "<h1>Lógico</h1>";
    // AND o &&: $a && $b es True si $a y $b sn verdaders
    // OR o ||:$a || $b es True si $a o $b sn verdaders
    //XOR: $a XOR $b es True si si $a es verdadero o $b es verdadero, no los dos.
    //!:!$a es True si $a es False
    $x=4;
    $y=5;

    if(($x==4)&&($y==5)){
        print("Estás en lo correcto");
    }
    echo "<br>";
    if(($x==4) OR ($y==3)){
        print("La segunda es correcta");
    }
    echo "<br>";


    echo "<h1>Unión (concatenación) de cadenas</h1>";

    //Para la unión de cadenas se emplea el punto (.)

    $t="Ejemplo";
    $w='union';
    $x='de';
    $y='cadenas';
    $z=' ';
    $resultado1=$t;
    $resultado2=$t.$z.$x.$z.$w.$z.$x.$z.$y;
    echo '<b><h1>';
    echo $resultado1;

    echo $resultado2;
    echo '</b></h1>';


    ?>
