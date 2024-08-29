<?php
function checkSpecialCharacters($sentence) {
    $specialCharacters = ['!', '*', '$']; 

    $count = 0;
    foreach ($specialCharacters as $symbol) {
        if (strpos($sentence, $symbol) !== false) {
            $count++;
        }
    }

    if ($count > 0) {
        echo "Karakter yang terdapat pada kalimat: " . implode(', ', $specialCharacters);
    } else {
        echo "Tidak terdapat simbol pada kalimat.";
    }
}

$Teks = "Ini adalah kalimat dengan simbol ! dan *";
echo "Teks : $Teks <br>";
checkSpecialCharacters($Teks);
?>
