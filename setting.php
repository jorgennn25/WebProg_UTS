<?php 
if(isset($_POST['kirim'])) {
    $txtdate = $_POST['txtdate'];
    $txtarah = $_POST['txtarah'];
    
    setcookie("urut_berdasarkan", $txtdate, time() + (86400 * 30), "/");
    setcookie("arah", $txtarah, time() + (86400 * 30), "/");
    
    header("Location: setting.php?sukses=1");
    exit();
}

$urut_aktif = isset($_COOKIE['urut_berdasarkan']) ? $_COOKIE['urut_berdasarkan'] : "Tanggal";
$arah_aktif = isset($_COOKIE['arah']) ? $_COOKIE['arah'] : "Asc";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project WEBPROG</title>
    <style>
         .body {
            font-family: Arial, sans-serif;
        }.hl{
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body class="body">
    <h1 class="hl">Setting</h1>
    
    <?php 
    if(isset($_GET['sukses']) && $_GET['sukses'] == '1') {
        echo "<p>Data berhasil disimpan</p>";
    }
    ?>

    <form method="post" action="setting.php">
        <p> <label>Urut Berdasarkan : </label>
        <label> <input type="radio" name="txtdate" value="Tanggal" <?php if($urut_aktif == "Tanggal") echo "checked"; ?>> Tanggal</label>
        <input type="radio" name="txtdate" id="nominal" value="Nominal" <?php if($urut_aktif == "Nominal") echo "checked"; ?>> <label for="nominal"> Nominal</label>
        </p>
        
        <p> <label>Arah : </label>
        <label> <input type="radio" name="txtarah" value="Asc" <?php if($arah_aktif == "Asc") echo "checked"; ?>> Ascending</label>
        <input type="radio" name="txtarah" id="desc" value="Desc" <?php if($arah_aktif == "Desc") echo "checked"; ?>> <label for="desc"> Descending</label>
        </p>
        
        <p>
            <input type="submit" name="kirim" value="Simpan">
        </p>
    </form>
    
    <p></p>
    <a href="index.php">&laquo; Kembali</a>
</body>
</html>