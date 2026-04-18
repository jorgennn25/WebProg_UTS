<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project WEBPROG</title>

    <style>
        .body {
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body class="body">
    <h1 class="h1">Tambah Transaksi</h1>
    <form action="proses_tambah.php" method="post">
        Tanggal: <input type="date" name="tanggal" required><br><br>
        Nominal: <input type="number" name="nominal" required min="1"><br><br>
        <input type="submit" value="Simpan"><br><br>
    </form> 

    <a href='index.php'><< Kembali</a>
</body>
</html>