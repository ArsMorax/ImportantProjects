<?php
// 3

$bulan = 5;

switch (true) {
    case ($bulan <= 1 && $bulan > 3):
        echo "Ini bulan : Musim Dingin";
        break;
    case ($bulan <= 4 && $bulan > 6):
        echo "Ini bulan : Musim Semi";
        break;
    case ($bulan <= 7 && $bulan > 9):
        echo "Ini bulan : Musim Panas";
        break;
    default:
        echo "Ini bulan : Musim Gugur";
        break;
}

// 2
$kelamin = "L";

switch ($kelamin) {
    case "L":
        echo "Jenis Kelamin adalah Laki Laki";
        break;
    case "P":
        echo "Jenis Kelamin adalah Perempuan";
        break;
    default:
        echo "Lu kelamin apa?";
        break;
}

// 1

$hari = 5;

switch ($hari) {
    case ($hari = 1):
        echo "Ini hari : senin";
        break;
    case ($hari = 2):
        echo "Ini hari : sealsa";
        break;
    case ($hari = 3):
        echo "Ini hari :  rabu";
        break;
    case ($hari = 4):
        echo "Ini hari :  kamis";
        break;
    case ($hari = 5):
        echo "Ini hari :  jumat";
        break;
    case ($hari = 6):
        echo "Ini hari :  sabtu";
        break;
    default:
        echo "Ini hari :  mingug";
        break;
}

// 4

$kenda = "S";

switch ($kenda) {
    case "M":
        echo "Ini kendaraan :  mobil";
        break;
    case "S":
        echo "Ini kendaraan : spedea motr ";
        break;
    case "B":
        echo "Ini kenradraan :  bus";
        break;
    default:
        echo "Ini kendraaan :  truk";
        break;
}

// 5

$golongan = 2;

switch ($kenda) {
    case ($golongan == 1):
        echo "Golongan 1 : rp 5 jta";
        break;
    case ($golongan == 2):
        echo "Golongan 2 : rp 4 jt ";
        break;
    case ($golongan == 3):
        echo "Golongan 3 :  rp 3 juta";
        break;
    default:
        echo "Golongan 4 :  rp 2 juta";
        break;
}

// 6
$angkaw = 1;

while ($angkaw <= 10) {
    $angka++;
    echo "$angka";
}

// 7
$angkaww = 1;

do {
    $angkaww++;
    echo "$angkaww";
} while ($angkaww <= 10);

// 8
for ($i = 1; $i <= 20; $i++) {
    $i += 1;
    echo "Angka: $i\n";
}

// 10
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;
        echo "$hasil\t";
    }
}

// 9
$total = 0;

for ($angka = 1; $angka <= 100; $angka++) {
    $total += $angka;
}
echo "$total";
