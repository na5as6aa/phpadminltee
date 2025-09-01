<?php
$a = 10;
$b = 5;
$c = 2;
$d = 3;

$hasil1 = $a + $b/$c - $d; 

// kalau mau operasi logika, pakai tanda kurung biar jelas
$hasil2 = ($a && $b) || ($c && $d); 

echo "Hasil 1: $hasil1 <br>";
echo "Hasil 2: " . ($hasil2 ? "TRUE" : "FALSE");
?>