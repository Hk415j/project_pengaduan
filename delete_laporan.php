<?php
include "koneksi.php";
$id = $_GET['id'];
$koneksi = mysqli_connect("localhost", "root", "", "zpengaduan_masyarakat");
$koneksi->query("DELETE FROM `pengaduan` WHERE id_pengaduan='$id'");

header("location:laporan.php");

?>