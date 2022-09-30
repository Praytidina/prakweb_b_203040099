<?php
require 'functions.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
$id = $_GET['id'];
$buku = query("SELECT * FROM gadget WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil diubah!');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal diubah!');
            document.location.href = 'admin.php';
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
    <title>Ubah.php</title>
    <link rel="stylesheet" href="../CSS/style5.css">
</head>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>  
        <div class="box">
            <div class="container">
                <div class="form">
                    <h2>Ubah Data</h2>
                    <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $gdt['id']; ?>">
                        <table>
                            <tr>
                                <td>
                                    <label for="img">Gambar</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="img" value="<?= $gdt['img']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nama">Nama</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="nama"  value="<?= $gdt['nama']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="deskripsi">Spesifikasi</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="deskripsi"  value="<?= $gdt['deskripsi']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="harga">Harga</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="harga"  value="<?= $gdt['harga']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="kategori">Beli</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="kategori"  value="<?= $gdt['kategori']; ?>">
                                </td>
                            </tr>
                        </table>
                        <div class="inputBox">
                            <button type="submit" name="ubah">Ubah Data</button>
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