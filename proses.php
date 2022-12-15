<?php
if(isset($_POST['aksi'])){
  if($_POST['aksi'] == 'add'){
    // proses tambah data
    echo "proses tambah data";
  } else if($_POST['aksi'] == 'edit'){
    // proses edit data
    echo "proses edit data";
  }
}

if(isset($_GET['hapus'])){
  // proses hapus data
  echo "proses hapus data";
}
?>