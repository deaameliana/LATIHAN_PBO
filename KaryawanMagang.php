<?php
// Memanggil abstract class Karyawan
require_once 'Karyawan.php';

class KaryawanMagang extends Karyawan {
    // Properti khusus
    private $uangSakuBulanan;
    private $sertifikatKampusMerdeka;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $uangSakuBulanan, $sertifikatKampusMerdeka) {
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        
        $this->uangSakuBulanan = $uangSakuBulanan;
        $this->sertifikatKampusMerdeka = $sertifikatKampusMerdeka;
    }

    // Deklarasi method dari abstract class
    public function hitungGajiBersih() {
        // Akan diimplementasikan di Tahap 5
    }

    public function tampilkanProfilKaryawan() {
        // Akan diimplementasikan di Tahap 6
    }
}
?>