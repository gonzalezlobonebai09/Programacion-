<?php
// Incluyes las funciones una sola vez al inicio
require_once "funciones.php";

// Y luego muestras solo lo que necesitas en sus propias cajas limpias:
echo '<div class="caja1">';
echo "el promedio es: " . promedio_alumno(7, 10, 6) . "<br>";
echo '</div>';

echo '<div class="caja2">';
echo "el promedio es: " . promedio_alumno2(7, 8, 6) . "<br>";
echo '</div>';

//caja footer//
echo '<div class="cajafooter">';
echo '<footer>';
    echo '<p>Realizado por Nebai González Lobo</p>';
echo '</footer>';
echo '</div>';
