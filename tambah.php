<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggal = $_POST['tanggal'];
    $nominal = $_POST['nominal'];

    $data = isset($_COOKIE['transaksi'])
        ? json_decode($_COOKIE['transaksi'], true)
        : [];

    if (!is_array($data)) {
        $data = [];
    }

    $data[$tanggal] = $nominal;

    setcookie('transaksi', json_encode($data), time() + 86400, "/");

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Transaksi</title>
</head>
<body>

<h2>Tambah Transaksi</h2>

<form action="tambah.php" method="POST">
    Tanggal: <input type="date" name="tanggal" required><br><br>
    Nominal: <input type="number" name="nominal" required step="1000" min="0"><br><br>
    <button type="submit">Simpan</button>
</form>

<br>
<a href="index.php">Kembali</a>

</body>
</html>