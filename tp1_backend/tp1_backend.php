<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="punto1">
        <?php
        /* Punto 1*/

        echo "Hola mundo";

        ?>
    </div>

    <br><hr>

    <div class="punto2">
        <?php

        /* Punto 2*/

        $mensaje = "Hola mundo (con variable)";

        echo $mensaje;

        ?>
    </div>

    <br><hr><br>

    <div class="punto3">
        <?php

        /* Punto 3*/

        //variables enteras
        $facturas = 12;
        $tortas = 8;
        ?>

        <?php

        echo "facturas mas tortas =  ";
        echo $facturas + $tortas;

        ?>

        <br>

        <?php
        echo "facturas menos tortas =  ";
        echo $facturas - $tortas; 

        ?>

        <br>

        <?php
        echo "facturas por tortas =  ";
        echo $facturas * $tortas; 

        ?>

        <br>

        <?php

        echo "facturas entre tortas =  ";
        echo $facturas / $tortas; 

        ?>

        <br>

        <?php

        echo "facturas menos tortas =  ";
        echo $facturas % $tortas; 

        ?>
    </div>

    <br><hr><br>

    <div class="punto4">
        <?php

        /* Punto 4 */

        echo "De centigrados a fahrenheit: ";

        function centigradosAFahrenheit($centigrados)
        {
            return $centigrados * 9 / 5 + 32;
        }
        $centigrados = 20;
        $fahrenheit = centigradosAFahrenheit($centigrados);
        echo "$centigrados grados centígrados es igual a $fahrenheit grados fahrenheit";
        ?>
    </div>

    <br><br><hr><br>

    <div class="punto5">
        <?php

        /* Punto 5 - a */

        // Perímetro

        $base = "18";
        $altura = "12";

        $p = (2 * $base) + (2 * $altura);

        echo "El perímetro del rectángulo es: $p "; 

        ?>

        <br>

        <?php

        // Área

        $base = "18";
        $altura = "12";

        $a = ($base * $altura);

        echo "El área del rectángulo es: $a "; 

        ?>

        <br><br>

        <?php

        /* Punto 5 - b */

        // Perímetro

        $radio = "30";
        $py = "3.14";
        $diametro = "2";


        $p = ($radio * $py) * $diametro;

        echo "El perímetro del círculo es: $p"; 

        ?>

        <br>

        <?php

        // Área

        $radio = "30";
        $py = "3.14";

        
        $a = (($radio * $radio) * $py);

        echo "El área del círculo es: $a "; 

        ?>
        <hr>

    </div>
    

</body>
</html>