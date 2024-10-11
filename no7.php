<?php
$pembelian = 26000;
$discount1 = $pembelian * ((100 - 20) / 100);
$discount2 = $pembelian * ((100 - 10) / 100);

if ($pembelian >= 50000) {
    echo "u get discount around umm $discount1";
} elseif ($pembelian >= 25000) {
    echo "u get discount around umm $discount2";
} else {
    echo "NIGAG YOU BROKE AS HELL GET YO ASS OUT OF HERE";
}
