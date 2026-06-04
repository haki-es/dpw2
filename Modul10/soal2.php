<?php
// Soal Cerita 2: Pecahan Uang Ani

$total = 1387500;
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

echo "<h2>Pengambilan Uang Ani</h2>";
echo "<p>Total Uang: Rp. " . number_format($total, 0, ',', '.') . ",-</p>";
echo "<hr>";

$sisa = $total;
foreach ($pecahan as $nilai) {
    $jumlah = (int)($sisa / $nilai);
    $sisa   = $sisa % $nilai;
    echo "<p>Pecahan Rp. " . number_format($nilai, 0, ',', '.') . ",- : <strong>$jumlah lembar</strong></p>";
}
echo "<p>Sisa: Rp. $sisa,-</p>";
?>