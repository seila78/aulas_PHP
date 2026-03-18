<?php
$notas= [7, 4, 5, 6, 8, 4, 10, 4, 9, 8];
$total_media = count($notas);
$nota_maior = max($notas);
$nota_menor = min($notas);
$soma_notas = 0;
    foreach ($notas as $i) {
        $soma_notas = $soma_notas + $i;
    };
    $media_final = $soma_notas / $total_media;

    echo " a maior nota será: $nota_maior <br>";
    echo " a menor nota será: $nota_menor <br>";
    echo " a media das nota será: $media_final <br>";
?>