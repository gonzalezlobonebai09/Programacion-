<?php

echo '<style>
    body {
        background-color: #ff00cc; /* Color de fondo */
        color: #00ff04; /* Color del texto */
        font-family: Arial, sans-serif; /* Tipografía diferente */
        font-size: 25px; /* Tamaño de letra */
        padding: 33px;
    }
</style>';

$laptop=["Acer Nitro 5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];

$frutas=[
    "Fresas" => 100,
    "Peras" => 30,
    "Sandías" => 10,
    "Melocotones" => 17,
    "Manzanas" => 9
];
#1
echo "#1:" . "<br><br>";
foreach($laptop as $valor){
    echo $valor."<br>";
}
echo "<br>";
#2
echo "#2:" . "<br><br>";
foreach($laptop as $clave => $valor){
    echo $clave." = ".$valor."<br>";
}
echo "<br>";
#3
echo "#3:" . "<br><br>";
foreach($frutas as $valor){
    echo $valor."<br>";
}
echo "<br>";
#4
echo "#4:" . "<br><br>";
foreach($frutas as $clave => $valor){
    echo "Hay ".$valor." ".$clave." en el inventario"."<br>";
}
echo "<br>";

#ejemplo para traer datos de una BD:

echo "ejemplo para traer datos de una BD:" . "<br><br>";

$productos = [
    ["codigo" => "A0001", "descripcion" => "Mouse"],
    ["codigo" => "A0002", "descripcion" => "Teclado"],
    ["codigo" => "A0003", "descripcion" => "Monitor"],
    ["codigo" => "A0004", "descripcion" => "Impresor"]
];

foreach($productos as $prod){
    echo $prod["codigo"]." - ".$prod["descripcion"]."<br>";
}