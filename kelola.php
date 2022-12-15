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
  <nav class="navbar bg-light mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        CRUD - BS5
      </a>
    </div>
  </nav>
  <div class="container">
    <form method="POST" action="proses.php">
      <div class="mb-3 row">
        <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nisn" placeholder="Ex: 12231">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" placeholder="Ex: Alexander">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
          <select class="form-select">
            <option selected>Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
          <input class="form-control" type="file" id="foto">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="alamat" rows="3"></textarea>
        </div>
      </div>
      <div class="mb-3 row mt-4">
        <div class="col">
          <?php
          if (isset($_GET['ubah'])) {
          ?>
            <button type="submit" name="aksi" value="edit" class="btn btn-primary">
              <i class="fa fa-floppy-o"></i>
              Simpan Perubahan
            </button>
          <?php
          } else {
          ?>
            <button type="submit" name="aksi" value="add" class="btn btn-primary">
              <i class="fa fa-floppy-o"></i>
              Tambahkan
            </button>
          <?php
          }
          ?>
          <a href="index.php" type="button" class="btn btn-danger">
            <i class="fa fa-reply" aria-hidden="true"></i>
            Batal
          </a>
        </div>
      </div>
  </div>
  </form>
  </div>
</body>

</html>