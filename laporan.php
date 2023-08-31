<?php
  $koneksi = mysqli_connect("localhost", "root", "", "zpengaduan_masyarakat");
  $join    = "SELECT *
  FROM masyarakat
  RIGHT JOIN pengaduan
  ON masyarakat.nik = pengaduan.nik;";
  $select  = mysqli_query($koneksi, $join);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="tanggapan.css">
  <body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark d-flex justify-content-center"style="border: 1px solid rgba(65, 53, 67, 0.40);
    background: #481616;">
      <div class="container-fluid">
        <div class="navbar-brand mb-0 ">Pengaduan Masyarakat</div>
      </div>
    </nav>
       
        <div class="d-flex align-items-start" style="width: 120px;
        height: 90vh;
        border-right: 1px solid #5f195f;
    background: rgba(131, 0, 0, 0.85); opacity:50%;">
            <div class="nav flex-column nav-pills me-3 text" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link" href="Tampil.php">Home</a>
              <a class="nav-link" href="Pengaduan.php">Pengaduan</a>
              <a class="nav-link" href="laporan.php">Laporan</a>
              <a class="nav-link" href="login_tampil.php">Log out</a>
            </div>
            <div class="container">
              <table class="table" style="color: #fff;">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Laporan</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    while($data = mysqli_fetch_array($select)) { ?>
                    <tr>
                      <td><?= $data['id_pengaduan']; ?></td>
                      <td><?= $data['nama']; ?></td>
                      <td><?= $data['isi_laporan']; ?></td>
                      <td><img src="image/<?= $data['foto']; ?>" width="120px" height="120px"></td>
                      <td><button type="button" class="btn btn-info mt-4 text-white" disabled><?= $data['status']; ?></button></td>
                      <td><a href="delete_laporan.php?id=<?= $data['id_pengaduan'] ?>"><button class="btn btn-danger">Delete</button></a></td>
                      <td><a href="edit_laporan.php?id=<?= $data['id_pengaduan'] ?>"><button class="btn btn-success">Update</button></a></td>
                    </tr>
                    <?php } ?>
              </tbody>
              </table>
            </div>
          </div>
         
         <script src="./bootstrap.min.js"></script>
    </body>
</html>