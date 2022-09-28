<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While - Do while - For</title>
</head>
<body>

    <h1>TRABAJO PRACTICO N°3</h1>
    <br>
    <H2>WHILE - DO WHILE - FOR</H2>
    <br>
    <br>

<?php

echo "<h2>Punto 1: Mostrar los numeros del 1 al 100</h2>";

//variable

$i = 1;

while($i <= 100){
    
    echo "$i, ";
    $i++;
}

echo "<h2>Punto 2: Mostrar los numeros del 100 al 1</h2>";

//variable

$i = 100;

while ($i >= 1){

    echo "$i, ";
    $i = $i - 1;
}

echo "<h2>Punto 3: Mostrar los numeros pares del 1 al 100</h2>";

//variable

$i = 0;

while ($i <= 100){
    echo "$i, ";
    $i = $i + 2; 
}

echo "<h2>Punto 4: Mostrar los numeros impares del 1 al 100</h2>";

//variable

$i = 0;

while ($i <= 100){
    echo "$i, ";
    $i = $i + 3; 
}


?>
<?php

echo "<h2>Punto 5: Mostrar la suma de los números del 1 a 20</h2>";

$suma = 0;

for ($i = 1; $i <= 20; $i++) { 
    $suma += $i; 
} 
print "<p>La suma de los números de 1 a 20 es $suma.</p>\n";


?>
<?php

echo "<h2>Punto 6: Mostrar la suma de los números pares del 1 a 20</h2>";

$suma = 0;

for ($i = 1; $i <= 20; $i++) { 
    $suma += $i-5; 
} 
print "<p>La suma de los números pares del 1 a 20 es $suma.</p>\n";


?>

</body>
</html>