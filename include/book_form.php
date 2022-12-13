<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'admin_noempak');

if (isset($_POST['send'])) {
   // $id_booking = $_POST['id_booking'];
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $telepon = $_POST['telepon'];
   $alamat = $_POST['alamat'];
   $id_package = $_POST['package'];
   $tamu = $_POST['tamu'];
   $pemberangkatan = $_POST['pemberangkatan'];
   $meninggalkan = $_POST['meninggalkan'];

   $sql = " INSERT INTO `booking` (`nama`, `email`, `telepon`, `alamat`, `id_package`, `tamu`, `pemberangkatan`,`meninggalkan`) 
   VALUES ('$nama', '$email', '$telepon', '$alamat', '$id_package', '$tamu','$pemberangkatan','$meninggalkan') ";
   mysqli_query($koneksi, $sql);
   $id_booking = mysqli_insert_id($koneksi);
   header('location:index.php?include=book');
} else {
   echo 'something went wrong please try again!';
}
