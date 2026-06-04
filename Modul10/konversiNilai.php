<?php
/*
 Huruf   Nilai
 C     = 0  -> 59
 BC    = 60 -> 69
 B     = 70 -> 79
 AB    = 80 -> 89
 A     = 90 -> 100
*/

$nilai = 85; // Ganti angka ini untuk mengetes

if ($nilai >= 90 && $nilai <= 100) {
    $huruf = "A";
} elseif ($nilai >= 80) {
    $huruf = "AB";
} elseif ($nilai >= 70) {
    $huruf = "B";
} elseif ($nilai >= 60) {
    $huruf = "BC";
} else {
    $huruf = "C";
}

echo "<h2>Konversi Nilai</h2>";
echo "<p>Nilai Angka : $nilai</p>";
echo "<p>Nilai Huruf : <strong>$huruf</strong></p>";
?>