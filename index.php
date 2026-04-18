<?php
$data = isset($_COOKIE['transaksi'])
    ? json_decode($_COOKIE['transaksi'], true)
    : [];

if (!is_array($data)) {
    $data = [];
}

$urut = isset($_COOKIE['urut_berdasarkan']) ? $_COOKIE['urut_berdasarkan'] : "Tanggal";
$arah = isset($_COOKIE['arah']) ? $_COOKIE['arah'] : "Ascending";

if ($urut == "Tanggal") {
    if ($arah == "Ascending" || $arah == "Asc" ) {
        ksort($data); 
    } else {
        krsort($data); 
    }
} else if ($urut == "Nominal") {
    if ($arah == "Ascending" || $arah == "Asc") {
        asort($data); 
    } else {
        arsort($data); 
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project WEBPROG</title>
    <style>
        .hr {
            border: 1px solid black;
        }

        .body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body class="body">
    <a href='tambah.php'>[Tambah Transaksi]</a>
    <a href='setting.php'>[Setting]</a>

    <hr class="hr">

    <h2>Data Transaksi</h2>

    <?php if (empty($data)): ?>
    <p>Belum ada data</p>
    <?php else: ?>
    <ul>
        <?php foreach ($data as $tanggal => $nominal): ?>
            <li>
                <?= $tanggal ?> - Rp. <?= number_format($nominal, 0, '.', ',') ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

</body>
</html>