<?php
if (isset($_POST['nama']) && isset($_POST['password']) && isset($_POST['user'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $password = htmlspecialchars($_POST['password']);
    $user = htmlspecialchars($_POST['user']);

    $passwordEncrypt = md5($password);

    if (strlen($nama) < 6) {
        echo "Username minimal 6 karakter." . "<br>";
    } else {
        echo "User: " . $user . "<br>";
    }
    if (strlen($password) < 8) {
        echo "Password minimal 8 karakter." . "<br>";
    } else {
        echo "Password: " . $passwordEncrypt . "<br>";
    }

    if (empty($nama) || empty($password) || empty($user)) {
        echo "Salah satu field terdeteksi ada yang tidak ada di isi." . "<br>";
        echo "<a href='tugas1.html'>Kembali isi field</a>";
    } else {
        echo "Nama: " . $nama . "<br>";
    }
}
