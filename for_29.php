<?php
#1.1

echo '<style>
    body {
        background-color: #eaff00; /* Color de fondo */
        color: #ff0000; /* Color del texto */
        font-family: Arial, sans-serif; /* Tipografía diferente */
        font-size: 30px; /* Tamaño de letra */
        padding: 50px;
    }
</style>';

echo "#1.1:" . "<br><br>";

for($i=1; $i<=20; $i++){
    echo $i. "<br>";
}

echo "<br><br>";

# 1.2

echo "#1.2:". "<br>";

for($i=20; $i>=1; $i--){
    echo $i. "<br>";
}

echo "<br><br>";

# 2.1
echo "2.1:" . "<br>";


$numero=7;
for($i=1; $i<=12; $i++){
    echo $i*$numero. "<br>";
}

echo "<br><br>";

#2.2 
echo "2.2:". "<br>";

$numero=7;
for($i=1; $i<=12; $i++){
    echo $numero. " X " .$i." = ".$i*$numero. "<br>";
}

echo "<br><br>";

#2.3
echo "2.3:". "<br>";

$numero=9;
for($i=12; $i>=1; $i--){
    echo $numero. " X " .$i." = ".$i*$numero. "<br>";
}

