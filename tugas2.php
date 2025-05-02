<?php
define("PI", 3.14159); // Konstanta nilai π

// Input jari-jari dan garis pelukis
$r = 7; // Jari-jari alas (contoh: 7 cm)
$s = 10; // Garis pelukis (contoh: 10 cm)

// Menghitung luas alas
$luasAlas = PI * pow($r, 2);

// Menghitung luas permukaan
$luasPermukaan = $luasAlas + (PI * $r * $s);

// Menampilkan hasil
echo "Jari-jari alas (r): " . $r . " cm<br>";
echo "Garis pelukis (s): " . $s . " cm<br>";
echo "Luas alas: " . number_format($luasAlas, 2, ',', '.') . " cm²<br>";
echo "Luas permukaan: " . number_format($luasPermukaan, 2, ',', '.') . " cm²<br>";
?>