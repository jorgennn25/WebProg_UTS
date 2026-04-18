<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project WEBPROG</title>
</head>
<body class="body">
    <h1>Setting</h1>
    <form action="index.php" method="post">
        <p><label>Urut Berdasarkan : </label>
            <label><input type="radio" name="txtdate" id="tanggal" value="Tanggal" checked>Tanggal </label>
            <label><input type="radio" name="txtdate" id="nominal" value="Nominal">Nominal </label></p>

        <p><label>Arah Berdasarkan : </label>
            <label><input type="radio" name="txtarah" id="arah" value="Asc" checked>Ascending </label>
            <label><input type="radio" name="txtarah" id="arah" value="Desc">Descending </label></p>
        
    <input type="submit" name="kirim" text="kirim">
    </form>

    <p></p>
    <a href="index.php"><< Kembali</a>  
</body>
</html>