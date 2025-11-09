<?php

// DEFINISI CLASS (DENAH)
class Rumah {
    // Properti
    public $warna;
    public $alamat;

    // Constructor (Otomatis jalan saat 'new')
    public function __construct($warna, $alamat) {
        $this->warna = $warna;
        $this->alamat = $alamat;
    }
}

// === INTI MATERI: OBJECT TYPE ===
// Kita membuat fungsi terpisah.
// Perhatikan! Rumah $dataRumah pada parameter.
// Artinya: Object 'Type Hinting' atau 'Object Type'
// Fungsi ini hanya bisa dijalankan oleh parameter
// yang merupakan object dari class 'Rumah'.

function pasangListrik(Rumah $dataRumah) {
    return "Listrik sedang dipasang di rumah " . $dataRumah->warna .
           " yang beralamat di " . $dataRumah->alamat;
}

// === BAGIAN OBJECT (RUMAH) ===

// 1. Buat object Rumah (ini valid)
$rumahSatu = new Rumah("Merah", "Jln. Merdeka 10");

// 2. Panggil fungsi dengan object yang BENAR
echo pasangListrik($rumahSatu);
// Output: Listrik sedang dipasang di rumah berwarna merah yang beralamat di Jln. Merdeka 10
echo "<br>";

// === CONTOH ERROR ===
// 3. Coba panggil fungsi dengan data string (SALAH)
$teksBiasa = "Ini cuma string";

// 4. Panggil fungsi dengan data yang akan ERROR:
// echo pasangListrik($teksBiasa);
// Bakal error karena $teksBiasa BUKAN object 'Rumah'