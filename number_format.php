<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios de Number Format</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>

<div class="caja1">
    <?php
    $cantidad_1=12732.77;
    $cantidad_2=1931.81;
    echo number_format($cantidad_1);
    echo "<br>";
    ?>
</div>

<div class="caja2">
    <?php
    $cantidad_1=12732.77;
    $cantidad_2=1931.81;
    $cantidad_1= number_format($cantidad_1);
    echo $cantidad_1;
    echo "<br>";
    ?>
</div>

<div class="caja3">
    <?php
    $cantidad_1=12732.4;
    $cantidad_2=1931.81;
    $cantidad_1= number_format($cantidad_1);
    echo $cantidad_1;
    echo "<br>";
    ?>
</div>

<div class="caja4">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_1= number_format($cantidad_1);
    echo $cantidad_1;
    echo "<br>";
    ?>
</div>

<div class="caja5">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_1= number_format($cantidad_1,2);
    echo $cantidad_1;
    echo "<br>";
    ?>
</div>

<div class="caja6">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_1= number_format($cantidad_2,2);
    echo $cantidad_2;
    echo "<br>";
    ?>
</div>

<div class="caja7">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_2= number_format($cantidad_2,1);
    echo $cantidad_2;
    echo "<br>";
    ?>
</div>

<div class="caja8">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_2= number_format($cantidad_2,2,".",",");
    echo $cantidad_2;
    echo "<br>";
    ?>
</div>

<div class="caja9">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_2= number_format($cantidad_2,2,".",",");
    echo $cantidad_2;
    echo "<br>";
    ?>
</div>

<div class="caja10">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_2= number_format($cantidad_2,2,"."," ");
    echo $cantidad_2;
    echo "<br>";
    ?>
</div>

<div class="caja11">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_2= number_format($cantidad_2,0,"",".");
    echo $cantidad_2;
    echo "<br>";
    ?>
</div>

<div class="caja12">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_2= number_format($cantidad_2,1);
    echo $cantidad_2;
    echo "<br>";
    ?>
</div>

<div class="caja13">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_2= number_format($cantidad_2,2,".",",");
    echo $cantidad_2;
    echo "<br>";
    ?>
</div>

<div class="caja14">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_2= number_format($cantidad_2,2,",","");
    echo $cantidad_2;
    echo "<br>";
    ?>
</div>

<div class="caja15">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_2= number_format($cantidad_2,2,","," ");
    echo $cantidad_2;
    echo "<br>";
    ?>
</div>

<div class="caja16">
    <?php
    $cantidad_1=12732.5;
    $cantidad_2=1931.81;
    $cantidad_2= number_format($cantidad_2,0,"",".");
    echo $cantidad_2;
    echo "<br>";
    ?>
</div>

</body>
</html>