<?php

class Produk {
    public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit";
protected $diskon = 0;

private $harga = 0;

public function __construct($judul, $penulis, $penerbit, $harga) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
}

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoPoduk() {
            $str = "{$this->judul} | {$this->getLabel()} (RP. {$this->harga})";

            return $str;
        }
    }

 class komik extends Produk {
            public $jmlHalaman;
        
            public function __construct($judul = "judul", $penulis = "penulis", $penerbit, $harga = 0, $jmlHalaman = "jmlHalaman") {
                parent::__construct($judul, $penulis, $penerbit, $harga);
        
                $this->jmlHalaman = $jmlHalaman;
            }
        
            public function getInfoProduk() {
                $str = "komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
                return $str;
            }
        }

class Game extends Produk {
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit, $harga = 0, $waktuMain = "waktuMain") {
        parent::__construct($judul,$penulis,$penerbit,$harga);

        $this->waktuMain = $waktuMain;
    }
    public function getInfoPoduk() {
        $str = "Game : " . parent::getInfoPoduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
}

$produk1 = new komik("One Piece", "Eichiro Oda", "Shounen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman","sony computer", 25000, 50);

echo $produk1->getInfoPoduk();
echo "<br>";
echo $produk2->getInfoPoduk();

?>