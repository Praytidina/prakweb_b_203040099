<?php

class Produk {
    public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

public function __construct($judul, $penulis, $penerbit, $harga) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    }

    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }
}

 class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk-> judul} | {$produk->getLabel()} (rp. {$produk->harga})";
        return $str;
    }
 }

 $produk1 = new Produk("Onepiece", "Eichiro Oda", "Sounen Jump", 30000);
 $produk2 = new Produk("Uncharted", "Neil Druckman", "sony computer", 250000);

 echo "Komik : " . $produk1->getLabel();
 echo "<br>" ;
 echo "Game : " . $produk2->getLabel();
 echo "<br>";
 $infoProduk1 = new CetakInfoproduk();
 echo $infoProduk1->cetak($produk1);
 echo "<br>";
 $infoproduk2 = new CetakInfoProduk();
 echo $infoproduk2->cetak($produk2);

 ?>