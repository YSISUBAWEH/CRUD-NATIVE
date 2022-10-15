 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tambahdata</title>
    <style type="text/css">
        *{
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
        }
        body{
        	height: 100vh;
            background-image: url(https://www.wallpaperuse.com/wallp/65-655530_m.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
            .a {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 20px 25px;
            width: 800px;
            height: 450px;
            background: transparent;
            box-shadow: 0 0 10px blue;
        }       
        .a form input{
        border-bottom: 2px solid blue;
        color: white;
        font-family: sans-serif;
}
		.a form label{
			color: whitesmoke;
		}
		button{
			float: right;
			background: transparent;
			color: white;
		}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="a">
		<strong>
			<h1><abbr title="attribute">--- <font color="#FFD700"><bold> Tambahka Data </bold></font>---</abbr></h1>
<form method="POST">
<div class="form-grup row">
	<label class="col-sm-2 col-form-label">Id buku</label>
		<div class="col-sm-10">
		<input type="text" class="form-control-plaintext" name="id_buku" placeholder="id-buku">
	</div>
</div>
<div class="form-grup row">
	<label class="col-sm-2 col-form-label">Judul</label>
		<div class="col-sm-10">
		<input type="text"class="form-control-plaintext" name="judul" required="required" placeholder="judul">
	</div>
</div>
<div class="form-grup row">
	<label class="col-sm-2 col-form-label">Deskripsi</label>
		<div class="col-sm-10">
		<input type="text"class="form-control-plaintext" name="deskripsi" placeholder="deskripsi">
	</div>
</div>
<div class="form-grup row">
	<label class="col-sm-2 col-form-label">Penulis</label>
		<div class="col-sm-10">
		<input type="text"class="form-control-plaintext" name="penulis" placeholder="Penulis">
	</div>
</div>
<div class="form-grup row">
	<label class="col-sm-2 col-form-label">penerbit</label>
		<div class="col-sm-10">
		<input type="text"class="form-control-plaintext" name="penerbit" placeholder="penerbit">
	</div>
</div>
<div class="form-grup row">
	<label class="col-sm-2 col-form-label">tahun terbit</label>
		<div class="col-sm-10">
		<input type="text"class="form-control-plaintext" name="tahun_terbit" placeholder="tahun terbit">
	</div>
</div>
<div class="form-grup row">
	<label class="col-sm-2 col-form-label">kategori</label>
		<div class="col-sm-10">
		<input type="text"class="form-control-plaintext" name="kategori" placeholder="kategori">
	</div>
</div>
	<br>
	<button name="simpan"><i class="fa fa-floppy-o" aria-hidden="true" fa-2x>Save</i></button>
</form></strong>
</div>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
	$id_buku = $_POST['id_buku'];
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$penulis = $_POST['penulis'];
	$penerbit = $_POST['penerbit'];
	$tahun_terbit = $_POST['tahun_terbit'];
	$kategori = $_POST['kategori'];

	$koneksi = new mysqli("localhost","root","","perpustakaan");

	$tambah 	= $koneksi->query("insert into buku values ('$id_buku','$judul','$deskripsi','$penulis','$penerbit','$tahun_terbit','$kategori')");
	echo "<script>window.location.href='dashboard.php'</script>";

}
