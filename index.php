
<?php
session_start();
$koneksi    = new mysqli('localhost','root','','perpustakaan');
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
            height: 100vh;
            background: rgba(0, 0, 0, 0.07);
        background-size: cover;
            background-position: center;
            background-repeat: no-repeat;}
        .b{
        	background-image:url(https://wallpaperspeed.id/wp-content/uploads/2021/11/black-background-wallpaper-hd-source-pinterest.com_.webp) ;
        	width: 100%;
        	height: 100vh;
        }
		.a{
			position: absolute;
			width: 400px;
			height: 500px;
			left: 50%;
			top: 50%;
			transform: translate(-50%,-50%);
			padding: 20px 25px;
			box-shadow: 0 0 10px black;
			border-radius: 20px;
			background:#FFFFFF;
		}
		p{
			text-align: center;
			color: blue;
			left: 50%;
			right: 50%;
		}
		.card{
			width: 300px;
			height: 400px;
			padding: 20px;
		}
	</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Halaman Login</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body><div class="b">
			<div class="a">
<div class="container">
    <div class="row">
    	
  	<div class="col-sm-10">
  		<p class="form-group"><i class="fa fa-user fa-5x"  aria-hidden="true"></i></p>
<p class="fw-bold mb-2 text-uppercase" >Login</p>
		<div class="card">

<div class="card-body" style="text-align: center;">
	<form method="POST">
		<div class="form-group">
			<input class="form-control" type="text" name="username" placeholder="Username">
<br>
		</div>
		<div class="form-group">
			<input class="form-control" type="password" name="password" placeholder="Password">
<br>
		</div>
		<div class="form-group">
			<input class="btn btn-primary" type="submit" name="log_in" value="Login">
		</div>
	</form>
</div>
		</div>
	</div>
	</div>
</div>
			</div></div>
</body>
</html>
<?php
//jika tombol login diklik
if(isset($_POST['log_in'])){
$username = $_POST['username'];
$password = $_POST['password'];
$cek = $koneksi->query("select * from login where username='$username' and password='$password'")->num_rows;
$ambil_lvl=$koneksi->query("select lvl from login where username='$username' and password='$password'")->fetch_assoc();
$lvl=$ambil_lvl['lvl'];
//exit lvl
//jika cek lebih dari 0 maka arahkan ke index
//jika cek = 0 munculkan pesan data yg anda masukkan salah
if($cek>0){
$_SESSION['login']='ok';
$_SESSION['lvl']=$lvl;
//exit($_SESSION['login']);
echo '<script>window.location.href="dashboard.php"</script>';
}else{
echo '<script>window.alert("Data yg anda masukkan salah!")</script>';
}
}