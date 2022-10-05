<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRABAJO PRACTICO N°5</title>
</head>
<body>
    <h1>TRABAJO PRACTICO N°5</h1>
    <?php
    
    print "<h2> Punto 1: Almacenar en un array los 10 primeros números pares y mostrar en pantalla 
            uno debajo del otro.</h2>";
    
    $n= ["2", "4", "6", "8","10", "12", "14", "16", "18", "20"];
    
    foreach ($n as $valor){
        print "<p>$valor</p> \n";
    }
    ?>
    <br>
    <hr>
    <br>
    <?php
    
    print "<h2> Punto 2: Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. 
    Mostrar el esquema del array con print_r().</h2>";

    $datos = ["Pedro", "Ana", "34", "1"];
    
    
    print   "<prev>\n";
    print_r($datos);
    print   "</prev>\n";
    
    ?>
    <br>
    <hr>
    <br>
    <?php
    
    print "<h2> Punto 3: Crear un array asociativo e introducir los siguientes valores.</h2>";

    $datos = [
        'nombre'=>"Pedro",
        'Apellido'=>"Torres",
        'Dirección'=>"Av. Mayor 3703",
        'Télefono'=>1122334455,

    ];
    ?>

    <br>
    <hr>
    <br>
    <?php
    
    print "<h2> Punto 4: Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el contenido del array. 
    Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h2>";

    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago",];
    
    print   "<prev>\n";
    print_r($ciudades);
    print   "</prev>\n";
    foreach ($ciudades as $hola => $valor){
        print "<p>La ciudad con el indice $hola tiene el nombre $valor.</p>\n";
    }
    
    ?>

    <br>
    <hr>
    <br>
    <?php
    
    print "<h2> Punto 5: Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. 
    Ejemplo: El índice de Madrid es MD.</h2>";

    $ciudades = ["Madrid" => "MD", "Barcelona" => "BCL", "Londres"=>"LD", "New York"=>"NY", "Los Angeles"=>"LA", "Chicago"=>"CCG"];
    
    foreach ($ciudades as $siglas => $valor){
        print "<p>El indice $siglas es $valor.</p>\n";
    }
    
    
    ?>
</body>
</html>