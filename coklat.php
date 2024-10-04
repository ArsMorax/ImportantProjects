<?php
// contoh sederhana

// NO. 1
echo "Selamat datang di SMK BINA KERJA <br>";

// NO. 2
$tanggal = 03 - 01 - 2024;
$jam = "14:14:05";

echo "Tanggal hari ini : $tanggal <br>";
echo "Jam hari ini : $jam <br>";

// NO. 3
$namaa = "Amau";
$pekerjaan = "Pengangguran";

echo "Saya adalah $namaa, dan pekerjaan saya adalah $pekerjaan <br>";

// NO. 4
$a = 10;
$b = 2;
$c = $a - $b;

echo "Penjumlahan dari 10 - 2 adalah $c <br>";

// NO. 5
$radius = 7;
$luas = 3.14 * $radius ^ 2;
$hasil = $radius * $luas;

echo "luas lingkaran dari radius 7 adalah $hasil <br>";

// NO.6
$alas = 8;
$tinggi = 10;
$hasil1 = ($alas * $tinggi) / 2;

echo "Tinggi segitiga adalah $hasil1 <br>";

// NO. 7
$tanggalLahir = 1994;
$currentDate = date(format: "Y");
$result = $currentDate - $tanggalLahir;

echo "If you were born in 1994, then right now you're around $result <br>";

// NO. 8
$x = 15;
$y = 30;

echo "Values before swap : x = $x, y = $y <br>";
$x = 30;
$y = 15;
echo "Values after swap : x = $x, y = $y <br>";

// NO .9
$suhuC = 30;
$fahrein = ($suhuC * 9 / 5) + 32;

echo "$suhuC derajat Celcius sama dengan $fahrein derajat Fahrein <br>";

// NO. 10
$bilangan1 = 27;
$bilangan2 = 4;
$hasilbilangan = $bilangan1 % $bilangan2;

echo "Sisa pembagian $bilangan1 dan $bilangan2 adalah $hasilbilangan <br>";

// this was unnecessary
$nama = "Syaeful";
$umur = 21;
$alamat = "Gang Keramik";

echo "Nama : $nama <br>";
echo "Umur : $umur <br>";
echo "Alamat : $alamat <br>";
