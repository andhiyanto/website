<?php

include "koneksi.php";


$id = $_POST['id_rumah'];
$nama = $_POST['nama_rumah'];
$harga = $_POST['harga_sewa'];
$des = $_POST['deskripsi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
  

$fotobaru = date('dmYHis').$foto;


$path = "../foto/".$fotobaru;

if(move_uploaded_file($tmp, $path)){

  $query = "INSERT INTO data VALUES('".$id."', '".$nama."', '".$harga."', '".$fotobaru."', '".$des."')";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
   
    echo "<script>alert('data berhasil disimpan')<script>";
    header("location: index.php"); 
  }else{
  
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
}else{
 
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>