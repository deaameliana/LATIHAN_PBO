<?php
require_once 'Karyawan.php';

class KaryawanTetap extends Karyawan {
    private $tunjanganKesehatan;
    private $opsiSahamId;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $tunjanganKesehatan, $opsiSahamId) {
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        $this->tunjanganKesehatan = $tunjanganKesehatan;
        $this->opsiSahamId = $opsiSahamId;
    }

    // Melakukan Overriding dengan logika Karyawan Tetap
    public function hitungGajiBersih() {
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari) + $this->tunjanganKesehatan;
    }

    public function tampilkanProfilKaryawan() {
        // Akan diimplementasikan di Tahap 6
    }
}
?>