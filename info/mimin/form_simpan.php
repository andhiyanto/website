<html>
<head>
  <title>database</title>
</head>
<body>
  <h1>Tambah data kontrakan</h1>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
  <table cellpadding="8">
    <tr>
    <td>id iklan</td>
    <td><input type="text" name="id_rumah"></td>
  </tr>
  <tr>
    <td>Nama rumah</td>
    <td><input type="text" name="nama_rumah"></td>
  </tr>
  <tr>
    <td>Harga sewa</td>
    <td><input type="text" name="harga_sewa"></td>
  </tr>
  <tr>
    <td>foto rumah</td>
    <td><input type="file" name="foto"></td>
  </tr>
  <tr>
    <td>Deskripsi</td>
    <td><textarea name="deskripsi"></textarea></td>
  </tr>

  </table>
  
  <hr>
  <input type="submit"  name="save"   value="save">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>