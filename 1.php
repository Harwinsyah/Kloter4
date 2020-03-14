<?php
    $uang = 2921690;
    $rupiah = "Rp. " . number_format($uang, 0,'.','.');
    $bunga1 = 2.1/100;
    $bunga2 = $bunga1 * $uang;
    $bulan = 12;

    $hitung = $uang + ($bunga2 * $bulan);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dumbways Soal 1</title>
</head>
<body>
    <h4>Diketahui</h4>
    <ul>
        <li>Jumlah uang <b><?= $rupiah ?></b></li>
        <li>Jumlah bunga <b>2.1%</b></li>
    </ul>

    <h4>Ditanyakan</h4>
    <ul>
        <li>Jumlah uang setelah <b>12 Bulan</b> ? </li>
    </ul>

    <h4>Penyelesaian</h4>
    <ul>
        <li>Saldo Awal + (Persen Bunga x Lama Menabung)</li>
        <li><?= $rupiah ?> + (2.1% x 12 Bulan)</li>
        <li><?= $rupiah ?> + (<?= $bunga2 ?> x 12)</li>
        <li><?= $rupiah ?> + (<?= $bunga2 * 12 ?>)</li>
        <li><?= "Rp. " . number_format($hitung, 2,'.','.'); ?></li>
    </ul>

    <h2>Jadi Jumlah Tabungan Selama 12 Bulan Adalah <?= "Rp. " . number_format($hitung, 2,'.','.'); ?></h2>
</body>
</html>