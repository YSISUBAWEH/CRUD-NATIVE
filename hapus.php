<?php
$koneksii = new mysqli("localhost","root","","perpustakaan");

$id_buku = $_GET['id_buku'];
$hapus = $koneksii->query("delete from buku where id_buku='$id_buku'");
 echo "<script>window.location.href='dashboard.php'</script>";
 

?>