<!DOCTYPE html>
<html>
<head>
	<title>Tugas akhir Pweb</title>
</head>
<head>
	 <!--  ini link yang berfungsi memangil css -->
	<link rel="stylesheet" type="text/css" href="tampilan.css">
  <link rel="stylesheet" type="text/css" href="tampilan.css" />
  <script type="text/javascript" src="java.js" ></script>

  <?php
  //untuk menyimpan user name dan password  ke file txt
@$username=$_POST['username'];
@$password=$_POST['password'];
$myfile="informasi.txt";
$fh=fopen($myfile, 'w')or die("file tidak ditemukan");
$stringdata="username :    "   .$username.  "  password :   "  .$password."\n";
fwrite($fh, $stringdata);
fclose($fh);
?>
</head>
<h1 align="center"> TUGAS AKHIR PEMEROGRAMAN WEB</h1>
<h2 align="center"> Membuat halaman web dinamis</h2>
<br>
<body>

<div class="home"> <p align="center"> HOME</p>
</div>
	<br>
<!-- menu pencarian google -->
<form method="post" name="formcari" class="cari" onSubmit="cari()">
	<center>Cari Google:</center> 
<input name="keyword" size="20 px" type="text">
<input type="submit" value="Cari">

</form>
<br>
	<!-- pilihan menu biodata yang akan langsung menu ke halaman biodata -->
	<form method="POST" action="biodata.php">
		<div>
	<input type="submit" value="BIODATA" class="menu" a >
</div>
	<br>
</form>
	<!-- pilihan menu konvensi yang akan langsung mengirim ke halaman konvensi-->
	<form method="POST" action="konvensi.php">
	<input type="submit" value="KONVENSI NILAI" class="menu" >
	<br>
</form>

<!-- membuat tombol log out yang mengirim kita ke menu login lagi-->
<form  method="post" action="login.php">
	<div>
		<br>
		<br>
		<center>
	<input type="submit" class="tombol_out" value="LOG OUT " >
</center>
</div>
</form>

</body>
</html>