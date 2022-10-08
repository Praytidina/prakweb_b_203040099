<?php

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "halo " . self::$angka++ . " kali . <br>";
    }
}

$obj = new contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>" ;

$obj2 = new contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

?>