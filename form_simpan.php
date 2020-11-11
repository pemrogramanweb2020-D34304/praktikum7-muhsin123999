<html>
<head>
  <title>Aplikasi CRUD Pendataan Penduduk</title>
</head>
<body>
  <h1>Tambah Data Penduduk</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>NIK</td>
        <td><input type="text" name="nik"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td><input type="text" name="tgl_lahir"></td>
      </tr>
      
      <tr>
        <td>Tempat Lahir</td>
        <td><input type="text" name="tempat_lahir"></td>
      </tr>
      <tr>
        <td>foto</td>
        <td><input type="file" name="foto"></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>