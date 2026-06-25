<?php
// Memanggil abstract class Karyawan
require_once 'Karyawan.php';

class KaryawanTetap extends Karyawan {
    // Properti khusus
    private $tunjanganKesehatan;
    private $opsiSahamId;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $tunjanganKesehatan, $opsiSahamId) {
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        
        $this->tunjanganKesehatan = $tunjanganKesehatan;
        $this->opsiSahamId = $opsiSahamId;
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