<!DOCTYPE html>
<html>
<head>
	<title>tugas proyek html</title>
	  <!--  ini link yang berfungsi memangil css dan javascpit   -->
	<link rel="stylesheet" type="text/css" href="tampilan.css">
	<script type="text/javascript" src="java.js"></script>
</head>
<body>
	<h1>TUGAS AKHIR PEMEROGRAMAN WEB</h1>

	<div class="login">
		<p class="tulisan_login">LOGIN</p>

<script type="text/javascript">
	//fungsi agar user name dan password tidak kosong
  function validasi_input(form) {
  	//jika nama kosong maka akan ada perintah mengisi nama
    if (form.username.value=="") 
    {
    alert('Anda harus mengisi username !');
      form.username.focus();
      return (false);
    }
    //jika password kosong maka anda akan diminta menggisi password
    else if(form.password.value=="")
    {

      alert('Anda harus mengisi password !');
      form.password.focus();
       return (false);
    }
     return true;
  }
</script>
<!--tampilan login yang nantinya mengirim ke menu utama-->
<form method="POST" action="menu.php" onsubmit="return validasi_input(this) ">
	<!-- tampilan masukan user name -->
	<label>username</label>
	<input type="text" name="username"class="form_login" placeholder="username atau email" >
	<!--tampilan masukan password -->
	<label>password</label>
	<input type="text" name="password"class="form_login" id="password" placeholder="password">
	<!--tombol sembuyikan password yang berupa button yang dapat dikilik yang menggirim ke fungsi lihat agar password dapat dilihat atau di sembunyikan -->
	<button type="button" onclick="lihat()">Lihat Password</button>
	<br>
	<br>
	<br>
	<!-- membuat tombol login yang mengirim fungsi validasi di ats dan juga untuk mengirim ke halaman menu -->
	<input type="submit" class="tombol_login" value="LOGIN"  onclick="validasi()">	
<br>
<br>
</form>
	</div>
</body>

</html>