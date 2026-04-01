<?php
include "koneksi.php";

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$umur = $_POST['umur'];
$jk = $_POST['jenis_kelamin'];
$hobi = implode(",", $_POST['hobi']);
$asal = $_POST['asal'];
$alasan = $_POST['alasan'];

$query = "INSERT INTO pendaftaran 
VALUES (NULL,'$nama','$tanggal','$umur','$jk','$hobi','$asal','$alasan')";

mysqli_query($koneksi, $query);

$_SESSION['sudah_isi'] = true;

header("Location: design.php");
exit();
?>