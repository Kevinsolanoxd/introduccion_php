<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //if , if-else

    //ejemplo 1
    $color="rojo"
    if($color = "rojo")
    {
        print("efectivamente, el color es rojo")
    }

    //ejemplo 2
    $x=10;
    $y=15;
    if($x == $y)
    {
        print("x e y son iguales");
    }elseif($x > $y)
    {
        print("x es mayor que y");
    }elseif($x < $y)
    {
        print("x es menor que y");
    }

    //while
    // indica que minetras no se cumpla una determinada condición, no se saldra del bucle y no 
    // saltara a la siguiente linea de codigo 
    $x=10;
    while(--$x);
    {
        echo "<big>";
        echo "<b>";
        print("numero: ".$x);
        echo "<br>";
        echo "<hr>";
    }
    //do while
    //for
    //sera utilizado para ejecutar un bucle un deteerminado numero de veces hasta que se cumpla una
    //condicion
    echo "<br>";
    echo "<h1>for</h1>"
    for($x=5; $x=10; $x++)
    {
        print("numero: ".$x."<br>");
    }
    //require
    // sirve para incluir archivos en nuestras paginas y solo sera nesesario hacer referenca
    //a este archivo con la intrucion require. Se usa principalmente para definir variables,
    //y estas estaran listas una vez hagamos una llamada al archivo donde esten guardadas
    
    //include
    //el funcionamineto es igual que el de la intruccion require(), conla diferencia de que si
    // puede procesar el coigo tantas veces como la llamenos a esa pagina externa 
    include("variables.php")
    echo "<br>"
    print("$x","$y","$z")

    //switch
    // se utiliza para comprobar un dato entre varias posibilidades
    $color="negro"
    switch($color)
    {
        case "blanco":
            $sector= "claro";
            break;
        case "naranja":
            $sector= "normal";
            break;
        case "negro":
            $sector= "oscuro";
            break;
    }

    ?>
</body>
</html>