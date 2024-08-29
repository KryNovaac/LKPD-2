<?php
function hitungJawaban($nama, $jawabanBenar, $jawabanSiswa) {
    $jumlahBenar = 0;
    $jumlahSalah = 0;

    if (count($jawabanBenar) !== count($jawabanSiswa)) {
        return "Jumlah jawaban tidak sesuai!";
    }

    for ($i = 0; $i < count($jawabanBenar); $i++) {
        if ($jawabanSiswa[$i] === $jawabanBenar[$i]) {
            $jumlahBenar++;
        } else {
            $jumlahSalah++;
        }
    }

    return "Nama: {$nama} <br> Jumlah Benar: {$jumlahBenar} <br> Jumlah Salah: {$jumlahSalah}";
}

$jawabanBenar = ['a', 'b', 'c', 'a', 'c', 'b', 'a', 'a', 'a', 'a'];
$jawabanSiswa = ['a', 'b', 'c', 'a', 'b', 'b', 'a', 'a', 'a', 'b'];
$namaSiswa = 'ry';

echo hitungJawaban($namaSiswa, $jawabanBenar, $jawabanSiswa);
?>