<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$foto = $_POST['foto'];
// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE cobamahasiswa SET nik=:nik, nama=:nama, tgl_lahir=:tgl_lahirr, tempat_lahir=:tempat_lahir, foto=:foto WHERE id=:id");
$sql->bindParam(':nik', $nik);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':tgl_lahirr', $tgl_lahir);
$sql->bindParam(':tempat_lahir', $tempat_lahir);
$sql->bindParam(':foto', $foto);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>