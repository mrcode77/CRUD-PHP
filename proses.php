<?php
include "koneksi.php";

if (isset($_POST['aksi'])) {
  if ($_POST['aksi'] == 'add') {
    $nisn = $_POST['nisn'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $foto = $_FILES['foto']['name'];
    $alamat = $_POST['alamat'];

    // upload foto
    $dir = "img/";
    $tmpFile = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmpFile, $dir.$foto);
  
    die();
   
    // proses tambah data
    $query = "INSERT INTO tb_siswa (nisn, nama_siswa, jenis_kelamin, foto_siswa, alamat) VALUES ( '$nisn', '$nama_siswa', '$jenis_kelamin', '$foto', '$alamat')";
    $sql = mysqli_query($koneksi, $query);

    if($sql) {
      header("location: index.php");
    } else {
      echo $query;
    }

  } else if ($_POST['aksi'] == 'edit') {
    // proses edit data
    echo "proses edit data";
  }
}

if (isset($_GET['hapus'])) {
  // proses hapus data
  // echo "proses hapus data";
  $id_siswa = $_GET['hapus'];

  $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa'";
  $sqlShow = mysqli_query($koneksi, $queryShow);
  $result = mysqli_fetch_assoc($sqlShow);

  unlink("img/".$result['foto_siswa']);

  $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa'";
  $sql = mysqli_query($koneksi, $query);
  if($sql) {
    header("location: index.php");
  } else {
    echo $query;
  }
}
