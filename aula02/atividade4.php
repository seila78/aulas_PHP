<?php
    for ($tabuada = 1; $tabuada <= 10; $tabuada++) {
        echo "Tabuada do $tabuada <br>";
            for ($i = 1; $i <= 10; $i++) {
                echo "$tabuada X $i = " . ($tabuada * $i) . "<br>";
            }
        echo "<br>";
    }
?>