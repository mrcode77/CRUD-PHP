<?php
$host = "localhost";
$user = "admin"; //username phpmysql
$pass = "Administrator*"; //password phpmysql
$nama_db = "db_siswa"; //nama database yang di buat

$koneksi = mysqli_connect($host, $user, $pass, $nama_db);

if(!$koneksi){ //jika tidak terkoneksi maka akan menampilkan error
    die("Koneksi dengan database gagal: ".mysqli_connect_error());
}
