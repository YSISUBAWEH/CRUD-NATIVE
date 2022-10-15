<?php
session_start();
$lvl=$_SESSION['lvl'];
$tiket=$_SESSION['login'];
if ($tiket!='ok'){
	echo '<script>window.alert("Silahkan Login terlebih dahulu")</script>';
			echo '<script>window.location.href="index.php"</script>';

}

include 'koneksi.php';

$tampil 	= $koneksi->query("select * from buku");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;
            background-position: center;
            background-repeat: no-repeat;
        }
		.d{

			background-image: url(https://png.pngtree.com/element_our/20200702/ourlarge/pngtree-cartoon-line-spaceman-element-image_2280927.jpg?w=400);
			width: 100%;
			height: 100vh;
            	
		}
		body h1{
			text-align: center;
		}
		table{
			width: 90%;
			border-radius:8px;
			background: rgba(0, 0, 0, 0.1);
		}
		.a{
			text-decoration: none;
			background-color: #00CC00;
			color: white;
			float: right;
			padding: 12px;
			padding-right: 20px;
			padding-left: 20px;
			border-radius: 4px;
			margin-right: 30px;
			margin-bottom: 10px;
		}
		table th,table td{
			text-align: center;
		}
		.e{
			float: right;

		}
		.table-reponsiv{
			margin: 20px;
		}
		::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>CRUD-MILIK-SUBAWEH</title>
</head>
<body>
	<font face="cambria">
		<strong>
	<div class="d">
<h1><abbr title="attribute">TABEL BUKU</abbr></h1>
<?php if($lvl=='bos') { ?>
<div class="a">
 <a href="tambah.php" class="list-group-item"><i class="fa fa-plus-square fa-spin" aria-hidden="true"></i> Tambah</a>
</div><?php } ?>
<div class="table-reponsiv">
<table class="table table-boderred table-hover"   cellspacing="2px" border="1" >
	<thead>
	<tr bgcolor="#00ff00">
		<th>ID Buku</th>
		<th>Judul</th>
		<th>Deskripsi</th>
		<th>Penulis</th>
		<th>Penerbit</th>
		<th>Tahun terbit</th>
		<th>Kategori</th>
		<?php if($lvl=='bos'){ ?>
		<th colspan="2">action</th>
	<?php } ?>
		</tr></thead>
<?php foreach($tampil as $baris){ ?>
	<tr>
		<td><?=$baris['id_buku']?></td>
		<td><?=$baris['judul']?></td>
		<td><?=$baris['deskripsi']?></td>
		<td><?=$baris['penulis']?></td>
		<td><?=$baris['penerbit']?></td>
		<td><?=$baris['tahun_terbit']?></td>
		<td><?=$baris['kategori']?></td>
		<?php if($lvl=='bos') { ?>
		<td width="45px"><a href="hapus.php?id_buku=<?=$baris['id_buku']?>"> <i class="fa fa-trash " style="color:red" aria-hidden="true"></i></a></td>
    	<td width="45px"><a href="edit.php?id_buku=<?=$baris['id_buku']?>"><i class="fa fa-pencil" style="color:blue;" aria-hidden="true"></i></a></td>
    <?php } ?>
	</tr>
<?php }  ?>
</table>
<button class="e"><a href="logout.php"><i class="fa fa-sign-out fa-1g" aria-hidden="true"></i></a></button>

</div>
</div>
</font></strong>
</body>
</html>