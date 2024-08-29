<?php

function tampilkanPolaBintang() {
    $jumlahBaris = 4;
    $bintangPerBaris = 8;

    for ($i = 1; $i <= $jumlahBaris; $i++) {
        for ($j = 1; $j <= $bintangPerBaris; $j++) {
            echo "*";
        }
        echo "<br>"; 
    }
}

tampilkanPolaBintang();
echo "<br>"; 
tampilkanPolaBintang();
?>
