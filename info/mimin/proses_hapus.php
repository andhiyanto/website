<?php

include "koneksi.php";

$id = $_GET['id_rumah'];

$query = "SELECT * FROM data WHERE id_rumah='".$id."'";
$sql = mysqli_query($connect, $query); 
$data = mysqli_fetch_array($sql);

if(is_file("../foto".$data['foto_rumah'])) 
  unlink("../foto".$data['foto_rumah']);


$query2 = "DELETE FROM data WHERE id_rumah='".$id."'";
$sql2 = mysqli_query($connect, $query2); 
if($sql2){
  header("location: index.php"); 
}else{
 
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>