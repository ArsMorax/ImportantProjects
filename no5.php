<?php
$tahun = 2020;

if ($tahun % 400 == 0) {
    echo "$tahun adalah tahun kabisat";
} elseif ($tahun % 100 == 0) {
    echo "$tahun bukan tahun kabisat";
} elseif ($tahun % 4 == 0) {
    echo "$tahun adalah tahun kabisat";
} else {
    echo "$tahun bukan tahun kabisat";
}
