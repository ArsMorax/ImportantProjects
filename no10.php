<?php
$var1 = 55;
$var2 = 10;
$var3 = 30;

if ($var1 > $var2) {
    if ($var1 > $var3) {
        echo "$var1 is biggest number";
    } else {
        echo "$var3 is biggest number";
    }
}
if ($var2 > $var3) {
    echo "$var2 is biggest number";
}
