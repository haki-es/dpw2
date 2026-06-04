<?php
// Soal Cerita 1: Menghitung Gaji Bersih

$gaji_pokok    = 3250000;
$tunjangan     = 1200000;
$gaji_kotor    = $gaji_pokok + $tunjangan;
$pajak         = 0.10 * $gaji_kotor;
$gaji_bersih   = $gaji_kotor - $pajak;

echo "<h2>Perhitungan Gaji Obi</h2>";
echo "<p>Gaji Pokok      : Rp. " . number_format($gaji_pokok, 0, ',', '.') . ",-</p>";
echo "<p>Tunjangan       : Rp. " . number_format($tunjangan, 0, ',', '.') . ",-</p>";
echo "<p>Gaji Kotor      : Rp. " . number_format($gaji_kotor, 0, ',', '.') . ",-</p>";
echo "<p>Pajak (10%)     : Rp. " . number_format($pajak, 0, ',', '.') . ",-</p>";
echo "<p><strong>Gaji Bersih     : Rp. " . number_format($gaji_bersih, 0, ',', '.') . ",-</strong></p>";
?>