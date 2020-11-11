<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$foto = $_POST['foto'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO cobamahasiswa (nik, nama, tgl_lahir, tempat_lahir, foto) VALUES(:nik,:nama,:tgl_lahirr,:tempat_lahir,:foto)");
$sql->bindParam(':nik', $nik);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':tgl_lahirr', $tgl_lahir);
$sql->bindParam(':tempat_lahir', $tempat_lahir);
$sql->bindParam(':foto', $foto);
$sql->execute(); // Eksekusi query insert
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>