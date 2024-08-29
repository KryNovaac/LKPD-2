<?php
function truncateText($text, $maxLength = 50) {
    if (mb_strlen($text) <= $maxLength) {
        return $text;
    } else {
        return mb_substr($text, 0, $maxLength) . '...';
    }
}

$kalimat = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$kalimatTerpotong = truncateText($kalimat);

echo "Kalimat terpotong: {$kalimatTerpotong}\n";
?>