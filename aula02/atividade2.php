<?php
$numeros= [1, 4, 5, 6, 84, 474, 3635, 814, 92, 822];
$i =0;
$total_numeros = count($numeros);
$par = 0;
$impar = 0;
    while ($i < $total_numeros) {
        if ($numeros[$i] % 2 == 0) {
            $par++;
        }
        
        else {
            $impar++;
        }

        $i++;
    };

    echo "o total de numeros impar é: $impar <br>";
    echo "o total de numeros par é: $par <br>";
?>