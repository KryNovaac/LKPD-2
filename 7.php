<?php
function Text($text, $maxLength = 50) {
    if (mb_strlen($text) <= $maxLength) {
        return $text;
    } else {
        return mb_substr($text, 0, $maxLength) . '...';
    }
}

$kalimat = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$kalimatTerpotong = Text($kalimat);

echo "Kalimat terpotong: {$kalimatTerpotong}\n";
?>
