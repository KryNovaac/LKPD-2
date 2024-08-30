<?php

function tampilkanPolaBintang() {
    $jumlahBaris = 4;
    $bintangPerBaris = 8;
    $jumlah = 3;

for  ($b = 1; $b < $jumlah ; $b++) {
    echo "</br>";
    for ($i = 1; $i <= $jumlahBaris; $i++) {
        for ($a = 1; $a <= $bintangPerBaris; $a++) {
            echo "*";
        }
        echo "<br>"; 
    }
}}

tampilkanPolaBintang();
?>
