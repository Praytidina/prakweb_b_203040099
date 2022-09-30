<?php
require 'functions.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah.php</title>
    <link rel="stylesheet" href="../CSS/style4.css">
</head>
<body>
<section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>  
        <div class="box">
            <div class="container">
                <div class="form">
                    <h2>Tambah Data</h2>
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <label for="gambar">Gambar</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="img" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="judul_buku">judul buku</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="nama" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="pengarang">pengarang</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="deskripsi" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="harga">Harga</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="harga" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="penerbit">penerbit</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="kategori" autocomplete="off">
                                </td>
                            </tr>
                        </table>
                        <div class="inputBox">
                            <button type="submit" name="tambah">Tambah Data</button>
                            <button type="submit">
                                <a href="admin.php" style="text-decoration:none; color: #666;">Kembali</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>