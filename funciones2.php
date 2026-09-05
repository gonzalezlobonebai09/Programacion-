<?php

echo '<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #F7F4EA;
        padding: 40px;
    }

    .caja1 {
        background-color: #5d00ff;
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 5px solid #000000;
        border-radius: 10px;
    }

    .caja2 {
        background-color: #ac1010; 
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 5px solid #000000;
        border-radius: 10px;
    }

    .caja3 {
        background-color: #1ecd27;
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 5px solid #000000;
        border-radius: 10px;
    }

    .caja4 {
        background-color: #cea510;
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 5px solid #000000;
        border-radius: 10px;
    }

    .caja5 {
        background-color: #1eb6cd;
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 5px solid #000000;
        border-radius: 10px;
    }

    .caja6 {
        background-color: #ff0099;
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 5px solid #000000;
        border-radius: 10px;
    }

    .caja7 {
        background-color: #00ffaa;
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 5px solid #000000;
        border-radius: 10px;
    }

    .caja8 {
        background-color: #ffa500;
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 5px solid #000000;
        border-radius: 10px;
    }

    .caja9 {
        background-color: #9900ff;
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 5px solid #000000;
        border-radius: 10px;
    }

    .caja10 {
        background-color: #00ffff;
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 5px solid #000000;
        border-radius: 10px;
    }

    .caja11 {
        background-color: #ff0055;
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 5px solid #000000;
        border-radius: 10px;
    }

    .caja12 {
        background-color: #77ff00;
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 5px solid #000000;
        border-radius: 10px;
    }

    footer {
        width: 100%;
        text-align: center;
        margin-top: 20px;
        font-size: 16px;
        color: #000000;
    }

    .cajafooter {
        background-color: #ffffff;
        width: 350px;
        padding: 20px;
        margin-bottom: 20px;
        border: 8px solid #000000;
        border-radius: 10px;
        text-align: center;
    }
</style>';

echo '<div class="caja1">';
function saludo1(){
    echo "Hola, mi nombre es: Carlos <br>";
}
saludo1();
echo '</div>';

echo '<div class="caja2">';
function saludo2(){
    echo "Hola, mi nombre es: Carlos <br>";
}
saludo2();
saludo2();
saludo2();
echo '</div>';

echo '<div class="caja3">';
function saludo3(){
    echo "Hola, mi nombre es: Carlos <br>";
}
$saludo3=saludo3();
echo $saludo3;
echo '</div>';

echo '<div class="caja4">';
function saludo4(){
    return "Hola, mi nombre es: Carlos <br>";
}
saludo4();
echo '</div>';

echo '<div class="caja5">';
function saludo5(){
    return "Hola, mi nombre es: Carlos <br>";
}
$saludo5=saludo5();
echo $saludo5;
echo '</div>';

echo '<div class="caja6">';
function saludo6(){
    return "Hola, mi nombre es: Carlos <br>";
}
echo saludo6();
echo '</div>';

echo '<div class="caja7">';
function saludo7($nombre){
    return "Hola, mi nombre es: $nombre  <br>";
}
echo saludo7("Nicole");
echo '</div>';

echo '<div class="caja8">';
function saludo8($nombre){
    return "Hola, mi nombre es: $nombre  <br>";
}
echo saludo8("Nicole");
$usuario="Asheley";
echo saludo8($usuario);
echo '</div>';

echo '<div class="caja9">';
function saludo9($nombre){
    return "Hola, mi nombre es: $nombre  <br>";
}
echo saludo9("Nicole");
$usuario="Asheley";
echo saludo9($usuario);
echo saludo9($nombre="Carlos");
echo '</div>';

echo '<div class="caja10">';
function promedio_alumno($nota_1, $nota_2, $nota_3){
    $promedio=($nota_1+ $nota_2+$nota_3)/3;
    return $promedio;
}
$promedio=promedio_alumno(7,9,6);
echo "El promedio es de: ".$promedio."<br>";
echo '</div>';

echo '<div class="caja11">';
function promedio_alumno2($nota_1, $nota_2, $nota_3){
    $promedio2=($nota_1 + $nota_2 + $nota_3)/3;
    return $promedio2;
}
echo "El promedio es: ".promedio_alumno2(7,9,6)."<br>";
echo '</div>';

echo '<div class="caja12">';
function promedio_alumno3($nota_1, $nota_2, $nota_3){
    $promedio3=($nota_1 + $nota_2 + $nota_3)/3;
    return $promedio3;
}
echo "El promedio es: ".promedio_alumno3(7,10,6)."<br>";
echo "El promedio es: ".promedio_alumno3(7,1,6)."<br>";
echo "El promedio es: ".promedio_alumno3(7,7,6)."<br>";
echo "El promedio es: ".promedio_alumno3(7,2,6)."<br>";
echo "El promedio es: ".promedio_alumno3(7,4,6)."<br>";
echo '</div>';

echo '<div class="cajafooter">';
echo '<footer>';
echo '<p>Realizado por Nebai González Lobo</p>';
echo '</footer>';
echo '</div>';