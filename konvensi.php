<!DOCTYPE html>
<html>
<head>
	<title>Konversi</title>
</head>

 <link rel="stylesheet" type="text/css" href="tampilan.css" />
<script type="text/javascript" src="java.js"></script>
 <body>
 	<center>
<form NAME ="name_from" action="java.js">
	<frameset border="2" align="center"width="40%">
		<tr>
			<td width="100%" colspan="2"><H2 ALIGN="center">KONVENSI NILAI</H2></td>
		</tr>
		<div>
				UAS (35%):<input type="number"  name="in_UAS">
			</div>
				<br>
			<div>
				UTS (25%) : <input type="number"  name="in_UTS">
				<br>
			</div>
			<br>
			<div>
				UK (15%):<input type="number"  name="in_UK" size="10">
				<br>
			</div>
			<br>
			<div>
				TP (25%):<input type="number"  name="in_TP" size="10">
<br>
		</div>

		<br>
		<div>
	<td colspan="2" align="center">
	<input type="button" value="hitung" onclick="hitungnilai()">
	<input type="reset" name="reset">
	</td>
		</div>
		<br>
		<div>
				index prestasi : <input type="text"  name="index" >
				<br>
		</div>
		<br>
	<div>
				Keterangan : <input type="text"  name="ket" >
</div>

	</frameset>
</center>
<br>

	</form>
		<center>
	<form method="POST" action="menu.php"> 
<input type="submit" value="kembali" class="tombol_out">
</center>
</form>
</body>
</html>