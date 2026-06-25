<?php
// Memanggil file koneksi dan class
require_once 'koneksi.php';
require_once 'KaryawanKontrak.php';
require_once 'KaryawanTetap.php';
require_once 'KaryawanMagang.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penggajian Karyawan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 30px; }
        th, td { border: 1px solid #dddddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        h1 { text-align: center; }
        h2 { color: #2c3e50; border-bottom: 2px solid #2c3e50; padding-bottom: 5px; }
    </style>
</head>
<body>

    <h1>Daftar Slip Gaji & Informasi Karyawan</h1>

    <!-- ================= KARYAWAN TETAP ================= -->
    <h2>Karyawan Tetap</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Karyawan</th>
                <th>Departemen</th>
                <th>Hari Kerja</th>
                <th>Gaji Dasar/Hari</th>
                <th>Tunjangan Kesehatan</th>
                <th>Opsi Saham ID</th>
                <th>Gaji Bersih</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sqlTetap = "SELECT * FROM tabel_karyawan WHERE jenis_karyawan = 'Tetap'";
            $resultTetap = $conn->query($sqlTetap);

            if ($resultTetap->num_rows > 0) {
                while($row = $resultTetap->fetch_assoc()) {
                    // Instansiasi Objek Karyawan Tetap
                    $karyawan = new KaryawanTetap(
                        $row['id_karyawan'], $row['nama_karyawan'], $row['departemen'],
                        $row['hari_kerja_masuk'], $row['gaji_dasar_per_hari'], 
                        $row['tunjangan_kesehatan'], $row['opsi_saham_id']
                    );
                    
                    // Memanggil method overriding
                    $gajiBersih = $karyawan->hitungGajiBersih();

                    echo "<tr>
                            <td>{$row['id_karyawan']}</td>
                            <td>{$row['nama_karyawan']}</td>
                            <td>{$row['departemen']}</td>
                            <td>{$row['hari_kerja_masuk']}</td>
                            <td>Rp " . number_format($row['gaji_dasar_per_hari'], 0, ',', '.') . "</td>
                            <td>Rp " . number_format($row['tunjangan_kesehatan'], 0, ',', '.') . "</td>
                            <td>{$row['opsi_saham_id']}</td>
                            <td><strong>Rp " . number_format($gajiBersih, 0, ',', '.') . "</strong></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Tidak ada data Karyawan Tetap.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- ================= KARYAWAN KONTRAK ================= -->
    <h2>Karyawan Kontrak</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Karyawan</th>
                <th>Departemen</th>
                <th>Hari Kerja</th>
                <th>Gaji Dasar/Hari</th>
                <th>Durasi Kontrak (Bulan)</th>
                <th>Agensi Penyalur</th>
                <th>Gaji Bersih</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sqlKontrak = "SELECT * FROM tabel_karyawan WHERE jenis_karyawan = 'Kontrak'";
            $resultKontrak = $conn->query($sqlKontrak);

            if ($resultKontrak->num_rows > 0) {
                while($row = $resultKontrak->fetch_assoc()) {
                    // Instansiasi Objek Karyawan Kontrak
                    $karyawan = new KaryawanKontrak(
                        $row['id_karyawan'], $row['nama_karyawan'], $row['departemen'],
                        $row['hari_kerja_masuk'], $row['gaji_dasar_per_hari'], 
                        $row['durasi_kontrak_bulan'], $row['agensi_penyalur']
                    );
                    
                    // Memanggil method overriding
                    $gajiBersih = $karyawan->hitungGajiBersih();

                    echo "<tr>
                            <td>{$row['id_karyawan']}</td>
                            <td>{$row['nama_karyawan']}</td>
                            <td>{$row['departemen']}</td>
                            <td>{$row['hari_kerja_masuk']}</td>
                            <td>Rp " . number_format($row['gaji_dasar_per_hari'], 0, ',', '.') . "</td>
                            <td>{$row['durasi_kontrak_bulan']}</td>
                            <td>{$row['agensi_penyalur']}</td>
                            <td><strong>Rp " . number_format($gajiBersih, 0, ',', '.') . "</strong></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Tidak ada data Karyawan Kontrak.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- ================= KARYAWAN MAGANG ================= -->
    <h2>Karyawan Magang</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Karyawan</th>
                <th>Departemen</th>
                <th>Hari Kerja</th>
                <th>Gaji Dasar/Hari (Plafon)</th>
                <th>Uang Saku Bulanan</th>
                <th>Sertifikat Kampus Merdeka</th>
                <th>Gaji Bersih (Setelah Potongan)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sqlMagang = "SELECT * FROM tabel_karyawan WHERE jenis_karyawan = 'Magang'";
            $resultMagang = $conn->query($sqlMagang);

            if ($resultMagang->num_rows > 0) {
                while($row = $resultMagang->fetch_assoc()) {
                    // Instansiasi Objek Karyawan Magang
                    $karyawan = new KaryawanMagang(
                        $row['id_karyawan'], $row['nama_karyawan'], $row['departemen'],
                        $row['hari_kerja_masuk'], $row['gaji_dasar_per_hari'], 
                        $row['uang_saku_bulanan'], $row['sertifikat_kampus_merdeka']
                    );
                    
                    // Memanggil method overriding
                    $gajiBersih = $karyawan->hitungGajiBersih();

                    echo "<tr>
                            <td>{$row['id_karyawan']}</td>
                            <td>{$row['nama_karyawan']}</td>
                            <td>{$row['departemen']}</td>
                            <td>{$row['hari_kerja_masuk']}</td>
                            <td>Rp " . number_format($row['gaji_dasar_per_hari'], 0, ',', '.') . "</td>
                            <td>Rp " . number_format($row['uang_saku_bulanan'], 0, ',', '.') . "</td>
                            <td>{$row['sertifikat_kampus_merdeka']}</td>
                            <td><strong>Rp " . number_format($gajiBersih, 0, ',', '.') . "</strong></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Tidak ada data Karyawan Magang.</td></tr>";
            }
            
            // Menutup koneksi database
            $conn->close();
            ?>
        </tbody>
    </table>

</body>
</html>