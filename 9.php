<?php
function cariJenisKoin($jumlahUang) {
    $jenisKoin = [];

    if ($jumlahUang >= 1000) {
        $jenisKoin[] = '1.000';
        $jumlahUang -= 1000;
    }
    if ($jumlahUang >= 500) {
        $jenisKoin[] = '500';
        $jumlahUang -= 500;
    }
    if ($jumlahUang >= 200) {
        $jenisKoin[] = '200';
        $jumlahUang -= 200;
    }
    if ($jumlahUang >= 100) {
        $jenisKoin[] = '100';
        $jumlahUang -= 100;
    }

    return $jenisKoin;
}

$uang = 600;
$hasil = cariJenisKoin($uang);

echo "Jenis koin yang bisa digunakan untuk Rp{$uang}: <br>";
foreach ($hasil as $koin) {
    echo "<ul>";
    echo "<li>Rp. {$koin} </li>";
    echo "</ul>";
}
?>
