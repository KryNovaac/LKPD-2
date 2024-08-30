<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

echo "Hasil :" ;
$gabungan = array_merge($bil1, $bil2);
rsort($gabungan);

foreach ($gabungan as $bilangan) {
    echo $bilangan . " , ";
}

// for ($i = 0; $i < count($gabungan); $i++) {
//     $bilangan = $gabungan[$i];
//     echo $bilangan . " , ";
// }

// $i = 0;
// while ($i < count($gabungan)) {
//     $bilangan = $gabungan[$i];
//     echo $bilangan . " , ";
//     $i++;
// }

?>
