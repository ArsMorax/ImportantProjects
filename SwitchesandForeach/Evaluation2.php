<?php 
// 1
$buah = ["Apel", "Mangga", "Jeruk"];

echo "Elemen pertama dari array \$buah: " . $buah[0] . "<br>";

// 2
$umur = [
    "Andi" => 25,
    "Budi" => 22,
    "Citra" => 30
];
echo "Umur Andi: " . $umur["Andi"] . "<br>";

// 3
$mahasiswa = array(
    array("Andi", "Teknik Informatika", 20)
);

echo $mahasiswa[0][0] . " - " . $mahasiswa[0][1] . " - Umur: " . $mahasiswa[0][2] . "<br>";

// 4
$angka = array(1, 2, 3, 4, 5);
foreach ($angka as $nilai) {
    echo $nilai . " ";
}
echo "<br><br>";

// 5
$hewan = array("Kucing", "Anjing", "Kelinci");
echo "Jumlah elemen: " . count($hewan). "<br>";

// 6
$binatang = array("Kucing", "Anjing", "Burung", "Ikan", "Ular");
echo "Daftar Binatang:<br>";
foreach ($binatang as $index => $namaBinatang) {
    echo "$index: $namaBinatang<br>";
}

echo "<br>";

// 7
$hargaBarang = array(
    "Buku" => 20000,
    "Pensil" => 5000
);
echo "Daftar Harga Barang:<br>";
foreach ($hargaBarang as $barang => $harga) {
    echo "Barang: $barang, Harga: Rp $harga<br>";
}


// 8
$nilairandom = array(1, 2, 3, 4);
array_push($nilairandom, 5);
echo "Nilai dalam Array setelah array_push():<br>";
foreach ($nilairandom as $nilai) {
    echo $nilai . " ";
}
echo "<br><br>";

// 9
$barang = array(
    array("Nama Barang" => "Buku", "Kategori" => "Alat Tulis", "Harga" => 20000),
    array("Nama Barang" => "Laptop", "Kategori" => "Elektronik", "Harga" => 5000000)
);

foreach ($barang as $item) {
    echo "Nama Barang: " . $item["Nama Barang"] . " - Kategori: " . $item["Kategori"] . " - Harga: " . $item["Harga"] . "<br>";
}

// 10
$nilaiSiswa = array(
    "Andi" => 80,
    "Budi" => 75,
    "Citra" => 90
);
$totalNilai = 0;
foreach ($nilaiSiswa as $nama => $nilai) {
    $totalNilai += $nilai;
}
$rataRata = $totalNilai / count($nilaiSiswa);
echo "Rata-rata nilai siswa: " . $rataRata;

// buang semua skibidi, antara gyatt dan sigma, ku bunuh dia impostor, tak ku sebut tu kai cenat