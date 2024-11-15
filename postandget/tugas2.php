<?php
if (isset($_POST['password']) && isset($_POST['username'])) {
    $user = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $registeredUser = "Test";
    $registeredPassword = "Test";

    if ($user == $registeredUser && $password == $registeredPassword) {
        echo "Login successful, please kindly kill yourself now." . "<br>";
        echo "<a href='tugas3.html'>Lanjut ke form berikutnya!</a>";
    } else {
        echo "NIGGA GET OUT!!!! GET THE FUCK OUT!!!!!!!";
    }
} else {
    echo "Data apalah itu";
}
