<?php
// Soal 18: Data nilai siswa

$siswa = array(
    array("no" => 1, "poin" => 75, "nama" => "Adi"),
    array("no" => 2, "poin" => 80, "nama" => "Joni"),
    array("no" => 3, "poin" => 65, "nama" => "Jihan"),
    array("no" => 4, "poin" => 70, "nama" => "Aya"),
    array("no" => 5, "poin" => 85, "nama" => "Ita"),
    array("no" => 6, "poin" => 90, "nama" => "Budi"),
    array("no" => 7, "poin" => 95, "nama" => "Tini"),
    array("no" => 8, "poin" => 65, "nama" => "Sari"),
);

echo "<h2>Data Nilai Siswa</h2>";

// a) Tampilkan poin siswa nomor urut 5
echo "<h3>a) Poin siswa nomor urut 5:</h3>";
echo "Nama: " . $siswa[4]['nama'] . " | Poin: " . $siswa[4]['poin'];

// b) Tampilkan semua siswa yang memiliki poin 90
echo "<h3>b) Siswa dengan poin 90:</h3>";
$ditemukan = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 90) {
        echo "Nama: " . $s['nama'] . "<br>";
        $ditemukan = true;
    }
}
if (!$ditemukan) {
    echo "Tidak ada siswa dengan poin 90.";
}

// c) Tampilkan semua siswa yang memiliki poin 100
echo "<h3>c) Siswa dengan poin 100:</h3>";
$ditemukan2 = false;
foreach ($siswa as $s) {
    if ($s['poin'] == 100) {
        echo "Nama: " . $s['nama'] . "<br>";
        $ditemukan2 = true;
    }
}
if (!$ditemukan2) {
    echo "Tidak ada siswa dengan poin 100.";
}
?>