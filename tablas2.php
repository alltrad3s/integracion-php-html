<?php
function imprimirTablaMultiplicar($numero) {
    echo "Tabla de multiplicar del $numero:\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "\n";
    }
    echo "\n"; // Agrega un espacio entre tablas
}

// Usar un bucle for para imprimir las tablas del 1 al 5
for ($j = 1; $j <= 5; $j++) {
    imprimirTablaMultiplicar($j);
}