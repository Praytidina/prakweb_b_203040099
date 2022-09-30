<?php



require 'functions.php';

$buku = query("SELECT * FROM buku");

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>TUBES_203040099</title>
  <link rel="stylesheet" href="style.css">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body class="luar">
  <h1 class="judul">Thousand Sunny store.</h1>
  <a href="tambah.php?id=<?= $sb['id']; ?>"><button>tambah</button></a>

  <br>
  <br>
  <br>
  <table class="tabel" border="1" cellpadding="13" cellspacing="0">
    <tr class="top">
      <th>id</th>
      <th>judul</th>
      <th>penulis</th>
      <th>penerbit</th>
      <th>tahun terbit</th>
      <th>harga</th>
      <th>gambar</th>
      <th>aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $sb) : ?>
      <tr class="isi">
        
        <td><?= $sb['id']; ?></td>
        <td><?= $sb['judul_buku']; ?></td>
        <td><?= $sb['pengarang']; ?></td>
        <td><?= $sb['penerbit']; ?></td>
        <td><?= $sb['tahun_terbit']; ?></td>
        <td><?= $sb['harga']; ?></td>
        <td><img class="cover" src="asset/img/<?= $sb['gambar']; ?>" alt=""></td>
        <td><a href="ubah.php?id=<?= $sb['id']; ?>"><button>Ubah</button></a>
                            <a href="hapus.php?id=<?= $sb['id']; ?>" onclick="return confirm('Yakin mau dihapus?')"><button>Hapus</button></a>
    </td>

      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>

  <footer class="page-footer blue-grey darken-4 center white-text">
    <div class="container">
      <p class="flow-text">ray2022</p>
    </div>
  </footer>

</body>

</html>