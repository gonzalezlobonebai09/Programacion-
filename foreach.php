<?php

echo '<style>
    /* estilo general de las cajas */
    body {
        font-family: Georgia, serif;
        padding: 40px;
    }

    .caja1 {
        background-color: #f30909;
        width: 310px;
        padding: 20px; /* Para alejar el texto del borde de la caja */
        margin-bottom: 50px; /* Deja distancia hacia afuera de las otras cajas */
        border: 5px solid #000000; /* Tamaño y color del borde */
        border-radius: 10px; /* Esquinas redondeadas */
    }

    .caja2 {
        background-color: #ff8400; 
        width: 300px;
        padding: 20px; /* Para alejar el texto del borde de la caja */
        margin-bottom: 20px; /* Deja distancia hacia afuera de las otras cajas */
        border: 5px solid #000000; /* Tamaño y color del borde */
        border-radius: 10px; /* Esquinas redondeadas */
    }

    .caja3 {
        background-color: #a1cd1e;
        width: 250px;
        padding: 20px; /* Para alejar el texto del borde de la caja */
        margin-bottom: 20px; /* Deja distancia hacia afuera de las otras cajas */
        border: 5px solid #000000; /* Tamaño y color del borde */
        border-radius: 10px; /* Esquinas redondeadas */
    }

    .caja4 {
        background-color: #29ce10;
        width: 300px;
        padding: 20px; /* Para alejar el texto del borde de la caja */
        margin-bottom: 20px; /* Deja distancia hacia afuera de las otras cajas */
        border: 5px solid #000000; /* Tamaño y color del borde */
        border-radius: 10px; /* Esquinas redondeadas */
    }

    .caja5 {
        background-color: #1ecda4;
        width: 200px;
        padding: 20px; /* Para alejar el texto del borde de la caja */
        margin-bottom: 20px; /* Deja distancia hacia afuera de las otras cajas */
        border: 5px solid #000000; /* Tamaño y color del borde */
        border-radius: 10px; /* Esquinas redondeadas */
    }


    /* Estilo del Footer=Pie de pagina */
    footer {
        width: 100%;
        text-align: center; /* para centrar texto */
        margin-top: 40px; /* Deja distancia hacia afuera de las otras cajas */
        font-size: 16px; /* tamaño de letra */
        color: #000000;
    }

    .cajafooter {
        background-color: #aa00ff;
        width: 300px;
        padding: 20px; /* Para alejar el texto del borde de la caja */
        margin-bottom: 20px; /* Deja distancia hacia afuera de las otras cajas */
        border: 8px solid #000000; /* Borde negro */
        border-radius: 10px; /* Esquinas redondeadas */
    }

</style>';

#ejemplo:

$laptop= ["Acer Nitro 5","Windows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];

$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9
];

#ej1
echo '<div class="caja1">'; //abrimos caja1//


foreach($laptop as $valor){
    echo $valor."<br>";
}
echo "<br>";
echo '</div>'; // Cerramos caja1//

#ej2
echo '<div class="caja2">'; //abrimos caja2//

foreach($laptop as $clave => $valor){
    echo $clave." - ".$valor."<br>";
}
echo "<br>";
echo '</div>'; // Cerramos caja2//

#ej3
echo '<div class="caja3">'; //abrimos caja3//

foreach($frutas as $valor){
    echo $valor."<br>";
}
echo "<br>";
echo '</div>'; // Cerramos caja3//

#ej4
echo '<div class="caja4">'; //abrimos caja4//

foreach($frutas as $clave => $valor){
    echo "Hay ".$valor." ".$clave." en el inventario"."<br>";
}
echo "<br>";
echo '</div>'; // Cerramos caja4//

#ej5 - BD
echo '<div class="caja5">'; //abrimos caja5//

$productos = [
    ["codigo" => "A0001", "descripcion" => "Mouse"],
    ["codigo" => "A0002", "descripcion" => "Teclado"],
    ["codigo" => "A0003", "descripcion" => "Monitor"],
    ["codigo" => "A0004", "descripcion" => "Impresor"]
];

foreach($productos as $prod){
    echo $prod["codigo"]." - ".$prod["descripcion"]."<br>";
}

echo '</div>'; // Cerramos caja5//

//caja footer//
echo '<div class="cajafooter">'; //abrimos cajafooter//

//footer//
echo '<footer>';
    echo '<p>Realizado por Nebai Aimeé González Lobo</p>';
echo '</footer>';

echo '</div>'; // Cerramos cajafooter//