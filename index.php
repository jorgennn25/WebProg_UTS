<?php
$data = isset($_COOKIE['transaksi'])
    ? json_decode($_COOKIE['transaksi'], true)
    : [];

if (!is_array($data)) {
    $data = [];
}

// urutkan ascending (tanggal lama → baru)
ksort($data);
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