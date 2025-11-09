<?php
class Produk {
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // METHOD YANG AKAN KITA OVERRIDE
    // Ini adalah method 'getInfoProduk' versi PARENT (Umum)
    public function getInfoProduk() {
        return "$this->judul | {$this->getLabel()} (Rp. {$this->harga})";
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    // === INTI MATERI: OVERRIDING ===
    // Method ini 'menya' method getInfoProduk() milik Parent
    public function getInfoProduk() {
        // 1. Kita tetap panggil method ASLI milik Parent
        // menggunakan parent::
        $infoParent = parent::getInfoProduk();

        // 2. Kita tambahkan info spesifik milik Komik
        return "Komik : {$infoParent} - {$this->jmlHalaman} Halaman.";
    }
}

// CHILD CLASS
class Game extends Produk {

    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Cara mengakses Harga dari Child Class
    // Buat sebuah Method untuk menampilkan harga

    public function getHarga() {
        return $this->harga;
    }

    public function getInfoProduk() {
        return "{$this->judul} | {$this->getInfo()} ~ {$this->waktuMain} Jam.";
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100);
$produk2 = new Game("Uncharted", "Neil", "Sony", 25000, 50);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
// Sudah tidak bisa mengakses dan mengubah harga karena sudah di Protected
// echo $produk2->harga;
// echo $produk2->getHarga(); yang benar menggunakan method dari child class
echo $produk2->getHarga();
?>