<?php
// Memanggil abstract class Karyawan
require_once 'Karyawan.php';

class KaryawanKontrak extends Karyawan {
    // Properti khusus
    private $durasiKontrakBulan;
    private $agensiPenyalur;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $durasiKontrakBulan, $agensiPenyalur) {
        // Memanggil constructor dari parent class
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        
        // Inisialisasi properti khusus
        $this->durasiKontrakBulan = $durasiKontrakBulan;
        $this->agensiPenyalur = $agensiPenyalur;
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