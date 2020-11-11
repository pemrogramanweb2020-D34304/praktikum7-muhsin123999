<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
  <h1>Data Penduduk</h1>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>NIK</th>
    <th>Nama</th>
    <th>Tanggal Lahir</th>
    <th>Tempat Lahir</th>
    <th>Foto</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Include / load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM cobamahasiswa");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['nik']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['tgl_lahir']."</td>";
    echo "<td>".$data['tempat_lahir']."</td>";
    echo "<td>".$data['foto']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>



