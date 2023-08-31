<?php
include "koneksi.php";
$status = '0';
$isi = $_POST['isi_laporan'];
$nik = '039151';
$nama_foto = $_FILES['foto']['name'];
$asal_foto =$_FILES['foto']['tmp_name'];
move_uploaded_file($asal_foto, "image/$nama_foto");

$proses_pengaduan = $koneksi->query("INSERT INTO `pengaduan` VALUES ('1',NOW(),'$nik','$isi','$nama_foto','$status')");
if($proses_pengaduan){
    echo "
        <script>
            alert('Laporan telah berhasil dilakukan');
            document.location.href = 'laporan.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Laporan telah berhasil dilakukan');
            document.location.href = 'pengaduan.php';
        </script>
    ";
}