<?php

echo '<style>
    /* Estilo general de las cajas y la página */
    body {
        font-family: Arial, sans-serif;
        background-color: #00e1ff; /* Fondo celeste */
        padding: 40px;
    }

    .caja-grande {
        background-color: #1eb6cd;
        width: 450px;
        padding: 20px;
        margin-bottom: 30px;
        border: 5px solid #000000; /* Tamaño y color del borde */
        border-radius: 10px; /* Esquinas redondeadas */
    }

    .caja-error {
        background-color: #ff0066;
        width: 450px;
        padding: 20px;
        margin-bottom: 30px;
        border: 5px solid #000000;
        border-radius: 10px;
    }
</style>';

// 1. INCLUDE
echo '<div class="caja-grande">'; /* Queda caja dentro de caja porque el archivo que llamas (foreach.php) ya trae sus propias cajas hechas, y al meterlo con include dentro de la caja de tu archivo principal, se anidan automáticamente */
echo '<strong>1) INCLUDE:</strong><br><br>'; /* El título se crea con <strong> para resaltarlo en negrita y los <br><br> suman espacios vacíos para separar visualmente el título del contenido */
include("foreach.php");
echo '</div>';


// 2. INCLUDE DUPLICADO
echo '<div class="caja-grande">'; /* Queda caja dentro de caja porque el archivo que llamas (foreach.php) ya trae sus propias cajas hechas, y al meterlo con include dentro de la caja de tu archivo principal, se anidan automáticamente */
echo '<strong>2) Si duplicamos el include, vamos a ver 2 veces el contenido:</strong><br><br>'; /* El título se crea con <strong> para resaltarlo en negrita y los <br><br> suman espacios vacíos para separar visualmente el título del contenido */
include("foreach.php");
include("foreach.php");
echo '</div>';


// 3. INCLUDE CON ARCHIVO QUE NO EXISTE
echo '<div class="caja-error">';
echo '<strong>3) Si ponemos un archivo que no existe (include):</strong><br><br>'; /* El título se crea con <strong> para resaltarlo en negrita y los <br><br> suman espacios vacíos para separar visualmente el título del contenido */
include("forexach.php");
echo '</div>';


// 4. REQUIRE
echo '<div class="caja-grande">'; /* Queda caja dentro de caja porque el archivo que llamas (foreach.php) ya trae sus propias cajas hechas, y al meterlo con include dentro de la caja de tu archivo principal, se anidan automáticamente */
echo '<strong>4) REQUIRE:</strong><br><br>'; /* El título se crea con <strong> para resaltarlo en negrita y los <br><br> suman espacios vacíos para separar visualmente el título del contenido */
require("foreach.php");
echo '</div>';


// 5. REQUIRE CON ARCHIVO QUE NO EXISTE
echo '<div class="caja-error">';
echo '<strong>5) Si ponemos un archivo que no existe (require):</strong><br><br>'; /* El título se crea con <strong> para resaltarlo en negrita y los <br><br> suman espacios vacíos para separar visualmente el título del contenido */
require("forexach.php");
echo '</div>';


// 6. REQUIRE_ONCE
echo '<div class="caja-grande">'; /* Queda caja dentro de caja porque el archivo que llamas (foreach.php) ya trae sus propias cajas hechas, y al meterlo con include dentro de la caja de tu archivo principal, se anidan automáticamente */
echo '<strong>6) REQUIRE_ONCE (se incluye solo 1 vez):</strong><br><br>'; /* El título se crea con <strong> para resaltarlo en negrita y los <br><br> suman espacios vacíos para separar visualmente el título del contenido */
require_once("foreach.php");
require_once("foreach.php");
echo '</div>';


// 7. INCLUDE_ONCE
echo '<div class="caja-grande">'; /* Queda caja dentro de caja porque el archivo que llamas (foreach.php) ya trae sus propias cajas hechas, y al meterlo con include dentro de la caja de tu archivo principal, se anidan automáticamente */
echo '<strong>7) INCLUDE_ONCE (se incluye solo 1 vez):</strong><br><br>'; /* El título se crea con <strong> para resaltarlo en negrita y los <br><br> suman espacios vacíos para separar visualmente el título del contenido */
include_once("foreach.php");
include_once("foreach.php");
echo '</div>';
