<html>
<head>
  <title>Aplikasi CRUD Pendataan Penduduk</title>
</head>
<body>
  <h1>Ubah Data Penduduk</h1>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM cobamahasiswa WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
    <table cellpadding="8">
      <tr>
        <td>NIK</td>
        <td><input type="text" name="nik" value="<?php echo $data['nik']; ?>"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
      </tr>
     <tr>
        <td>Tanggal Lahir</td>
        <td><input type="text" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>"></td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td><input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>"></td>
      </tr>
     <tr>
        <td>Foto</td>
        <td><input type="file" name="foto" value="<?php echo $data['foto']; ?>"></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>