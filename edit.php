<style type="text/css">
	body{
            height: 100vh;
            background: rgba(0, 0, 0, 0.07);
        background-size: cover;
            background-position: center;
            background-repeat: no-repeat;}
            .c{
            	background-image: url(https://img.freepik.com/free-vector/watercolor-background-with-hand-drawn-elements_23-2148867455.jpg?w=360);
            	height: 100vh;
            	width: 100%;
            }
    .a{		
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 20px 25px;
            width: 800px;
            height: 450px;
            background-color: transparent;
            box-shadow: 0 0 10px black;
    }
    .a form input{
        border-bottom: 2px solid black;
    }
    button{
        float: right;
    }

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$connect = new mysqli('localhost','root','','perpustakaan');
$id_buku     = $_GET['id_buku'];

$data = $connect->query("select * from buku where id_buku ='$id_buku'");
$tampil = $data->fetch_assoc();
?><strong>
<div class="c">

<div class="a">
    <div class="container">
		<h1><abbr title="attribute">Ubah Data</abbr></h1>
<form method="POST">
<div class="form-group row">
    <label class="col-sm-2 col-form-label">id_buku</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" name="id_buku" placeholder="ID Buku" value="<?=$tampil['id_buku']?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">judul</label>
        <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" name="judul" placeholder="judul" value="<?=$tampil['judul']?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">deskripsi</label>
        <div class="col-sm-10">    
        <input type="text" class="form-control-plaintext" name="deskripsi" placeholder="deskripsi" value="<?=$tampil['deskripsi']?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">penulis</label>
        <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" name="penulis" placeholder="penulis" value="<?=$tampil['penulis']?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">penerbit</label>
        <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" name="penerbit" placeholder="penerbit" value="<?=$tampil['penerbit']?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2">tahun terbit</label>
        <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" name="tahun_terbit" placeholder="tahunterbit" value="<?=$tampil['tahun_terbit']?>">
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2">kategori</label>
        <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" name="kategori" placeholder="kategori" value="<?=$tampil['kategori']?>">
    </div>
</div>
<br>
<button type="submit" name="save" class="btn btn-primary-success"><i class="fa fa-floppy-o" aria-hidden="true" fa-2x>Save</i></button>
</form>
</div>
</div></div></strong>
<?php

if(isset($_POST['save'])){


$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
	$penulis = $_POST['penulis'];
	$penerbit = $_POST['penerbit'];
	$tahun_terbit = $_POST['tahun_terbit'];
	$kategori = $_POST['kategori'];


$conn = new mysqli('localhost','root','','perpustakaan');
$sql = "update buku set

id_buku = '$id_buku',
judul = '$judul' , 
deskripsi = '$deskripsi' ,
penulis = '$penulis' ,
penerbit = '$penerbit',
tahun_terbit = '$tahun_terbit' ,
kategori = '$kategori' where id_buku='$id_buku'";
$conn = $conn->query($sql);


echo "<script>window.location.href='dashboard.php'</script>";
}