<?php

$harga_jual = 80000;
$harga_beli = 50000;

$untung = $harga_jual - $harga_beli;
$persen = ($untung / $harga_beli) * 100;

echo "Jual = $harga_jual <br>";
echo "Beli = $harga_beli <br>";
echo "Keuntungan = ? <br>";
echo "Jawaban : $persen%";

?>