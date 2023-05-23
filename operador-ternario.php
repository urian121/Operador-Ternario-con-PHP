<?php
echo '<h1 style="text-align:center;">Operador Ternario con PHP <hr></h1>';

$estatus = 0;
if ($estatus === 1) {
    echo "El estatus es 1";
} else {
    echo "El estatus 0";
}

echo "<br>";

/** */
if ($estatus === 1) :
    echo "El estatus es: " . $estatus;
else :
    echo "El estatus 0 " . $estatus;
endif;

/**
 * 
 */
echo "<br>";
echo ($estatus === 1) ? "Soy 1 " : "Soy 0";

echo "<br>";
$edad_alumno = 10;
$respuest = ($edad_alumno < 20) ? " Soy mayor a** " . $edad_alumno : "Soy menor a-- " . $edad_alumno;
echo $respuest;
