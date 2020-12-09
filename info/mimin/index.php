<html>
<link rel="stylesheet" type="text/css" href="info.css">
<head>
  <title>curd data kontrakan</title>
</head>
<body>
  <div class="head">
    <h1> Admin info kontrakan kontrakan jogja</h1>
    <a href="form_simpan.php">Tambah Data</a><br><br>
  </div>
  
  <table border="1" width="100%">
  <tr>
    <th>no</th>
    <th>nama rumah</th>
    <th>harga sewa</th>
    <th>foto rumah</th>
    <th>deskripsi</th>
    <th >Aksi</th>
  </tr>
  <?php $nomor=1; ?>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM data"; 
  $sql = mysqli_query($connect, $query); 
  
  while($data = mysqli_fetch_array($sql)){ 
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>".$data['nama_rumah']."</td>";
    echo "<td>".$data['harga_sewa']."</td>";
    echo "<td><img src='../foto/".$data['foto_rumah']."' width='100'></td>";
    echo "<td>".$data['deskripsi']."</td>";

    echo "<td><a href='proses_hapus.php?id_rumah=".$data['id_rumah']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  <?php $nomor++; ?>
  </table>
</body>
</html>