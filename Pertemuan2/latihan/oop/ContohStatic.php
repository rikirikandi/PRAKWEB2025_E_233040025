<?php// Buat sebuah class untuk membuat property dan method static.
class ContohStatic
{
    // Cara penulisan untuk property:
    // visibility + static + variable.
    public static $angka = 1;

    // Cara penulisan untuk Method:
    // visibility + static + function + nama function.
    public static function hallo()
    {
        return "hallo . self::$angka";
    }
}

// Mengakses Static Property
// Perhatikan: Kita tidak perlu 'new ContohStatic()'
// Kita panggil langsung Class-nya
echo ContohStatic::$angka;

// Menjalankan Static Method
echo ContohStatic::hallo();
?>