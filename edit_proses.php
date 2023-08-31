<?php
require "koneksi.php";
// $isi_laporan = $_POST['isi_laporan'];
// $id = $_GET['id'];

// $update = mysqli_query($koneksi, "UPDATE `pengaduan` set isi_laporan='$isi_laporan' where id_pengaduan='$id'");

// if($update){
//     header("locationp:laporan.php");
// }else {
//     print_r($koneksi->errorInfo());
// }

function ubah($data) {
    global $koneksi;
     $id             = $data['id'];
     $isi_laporan    = htmlspecialchars($data['isi_laporan']);
     $foto_laporan   = $data['foto'];
     $nama_foto = $_FILES['foto']['name'];
     $asal_foto =$_FILES['foto']['tmp_name'];
     move_uploaded_file($asal_foto, "image/$nama_foto");
     move_uploaded_file($asal_foto, "image/$nama_foto");

     $query = "UPDATE pengaduan SET 
                isi_laporan           = '$isi_laporan',
                foto                  = '$foto_laporan'
                WHERE id_pengaduan    = '$id'
            ";
    mysqli_query($koneksi, $query);
    
    return mysqli_affected_rows($koneksi);
}
?>