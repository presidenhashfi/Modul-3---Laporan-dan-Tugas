<?php
$saldoAwal = 2000000; // Saldo awal nasabah
$bunga = 0.03; // Bunga per bulan
$bulan = 11; // Jumlah bulan

// Menghitung saldo akhir setelah 11 bulan
$saldoAkhir = $saldoAwal * pow((1 + $bunga), $bulan);

echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. " . number_format($saldoAkhir, 2, ',', '.') . ",-";
?>