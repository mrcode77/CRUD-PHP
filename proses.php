<?php
include "koneksi.php";

if (isset($_POST['aksi'])) {
  if ($_POST['aksi'] == 'add') {
    $nisn = $_POST['nisn'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $foto = "indomie.jpg";
    $alamat = $_POST['alamat'];
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
  $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa'";
  $sql = mysqli_query($koneksi, $query);
  if($sql) {
    header("location: index.php");
  } else {
    echo $query;
  }
}
