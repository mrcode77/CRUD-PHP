<?php
  include 'koneksi.php';
  $query = "SELECT * FROM tb_siswa";
  $sql = mysqli_query($koneksi, $query);
  $no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD - Create Read Update Delete</title>
  <!-- Bootstrap link css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <!-- Javascript bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- fontawesome -->
  <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        CRUD - BS5
      </a>
    </div>
  </nav>
  <!-- Judul -->
  <div class="container">
    <figure>
      <h1 class="mt-4">Data Siswa</h1>
      <blockquote class="blockquote">
        <p>Berisi data yang telah disimpan di database.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        CRUD <cite title="Source Title">Create Read Update Delete</cite>
      </figcaption>
    </figure>
    <a href="kelola.php" type="button" class="btn btn-primary mb-3">
      <i class="fa fa-plus"></i>
      Tambah Data
    </a>
    <div class="table-responsive">
      <table class="table align-middle table-bordered table-hover">
        <thead>
          <tr>
            <th>
              <center>No</center>
            </th>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Foto Siswa</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          while($result = mysqli_fetch_assoc($sql)){
          ?>
          <tr>
            <td>
              <center><?php echo $no++;?>.</center>
            </td>
            <td><?php echo $result['nisn'];?></td>
            <td><?php echo $result['nama_siswa'];?></td>
            <td><?php echo $result['jenis_kelamin'];?></td>
            <td><img src="img/<?php echo $result['foto_siswa'];?>" style="width: 150px;"></td>
            <td><?php echo $result['alamat'];?></td>
            <td>
              <a href="kelola.php?ubah=<?php echo $result['id_siswa'];?>" type="button" class="btn btn-success btn-sm">
                <i class="fa fa-pencil"></i>
              </a>
              <a href="proses.php?hapus=<?php echo $result['id_siswa'];?>" type="button" class="btn btn-danger btn-sm">
                <i class="fa fa-trash"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>