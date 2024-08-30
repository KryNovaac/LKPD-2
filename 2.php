<?php
date_default_timezone_set('Asia/Jakarta');
$date = new DateTime('');
$waktu = $date->format('l');

echo "Hari ini: " . $waktu;

$totalPembelian = 130000;

$diskon = 0;

if ($waktu === "Tuesday") {
    $diskon = 0.05;
}

if ($totalPembelian > 100000) {
    $diskon = 0.07;
}
if ($totalPembelian > 100000 && $waktu === "Tuesday") {
    $diskon = 0.12;
}

$totalSetelahDiskon = $totalPembelian - ($totalPembelian * $diskon);

echo "<br>";
echo "Total pembelian: " . number_format($totalPembelian, 0, ',', '.') . " IDR<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Total yang harus dibayar: " . number_format($totalSetelahDiskon, 0, ',', '.') . " IDR";
?>