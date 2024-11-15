<?php
if (isset($_POST['nama']) && isset($_POST['nis']) && isset($_POST['kelas']) && isset($_POST['jurusan'])) {
    $user = htmlspecialchars($_POST['nama']);
    $nis = htmlspecialchars($_POST['nis']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $jurusan = htmlspecialchars($_POST['jurusan']);

    if (strlen($user) < 1 || strlen($nis) < 1 || strlen($kelas) < 1 || strlen($jurusan) < 1) {
        echo "Please fill in the required fields";
    } else {
        echo "Username : " . $user . "<br>";
        echo "NIS : " . $nis . "<br>";
        echo "Kelas : " . $kelas . "<br>";
        echo "Jurusan : " . $jurusan . "<br>";
    }
} else {
    echo "Data tidak ditemukan";
}
