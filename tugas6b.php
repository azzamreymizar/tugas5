<?php

$motor = false;
$owi = true;

if ($owi && $motor) {
    echo "bukhori ke sekolah";
} elseif ($owi && !$motor) {
    echo "bukhori tdk ke sekolah";
}
