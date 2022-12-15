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
            <th><center>No</center></th>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Foto Siswa</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><center>1.</center></td>
            <td>1234567890</td>
            <td>John Doe</td>
            <td>Laki-laki</td>
            <td><img src="img/indomie.jpg" style="width: 150px;"></td>
            <td>John Doe</td>
            <td>
              <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm">
                <i class="fa fa-pencil"></i>
              </a>
              <a href="proses.php?hapus=1" type="button" class="btn btn-danger btn-sm">
                <i class="fa fa-trash"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>