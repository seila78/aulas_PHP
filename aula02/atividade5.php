<?php
    for ($contador = 1; $contador <= 30; $contador++) {
        if ($contador % 3 == 0 and $contador % 5 == 0) {
            echo "BUM-CLAP! <br>";
            continue;
         }

         if ($contador % 3 == 0) {
            echo "BUM!";
         }
         
         if ($contador % 5 == 0) {
            echo "CLAP!";
         }

         if ($contador % 3 != 0 and $contador % 5 != 0) {
            echo "$contador";
         }
        echo "<br>";
    }
?>