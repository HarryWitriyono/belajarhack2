<!DOCTYPE html>
<html>
<body>

<h2>Form Pengguna</h2>

<form action="" method="post">
  <label for="kodelogin">Kode Login:</label><br>
  <input type="text" id="kodelogin" name="kodelogin" required><br>
  <label for="namapengguna">Nama Pengguan:</label><br>
  <input type="text" id="namapengguna" name="namapengguna" required><br><br>
  <label for="pwd">Password:</label><br>
  <input type="password" id="pwd" name="pwd"><br><br>
  <input type="submit" value="Simpan" name="tombolSubmit" required>
</form> 

<p>Silahkan isi semuanya dengan lengkap !</p>

</body>
</html>
<?php 
if (isset($_POST['tombolSubmit'])){
	$koneksi=mysqli_connect("localhost","root","","belajarhack1");
	$kodelogin=filter_var($_POST['kodelogin'],FILTER_SANITIZE_STRING);
	$namapengguna=filter_var($_POST['namapengguna'],FILTER_SANITIZE_STRING);
	$pwd=filter_var($_POST['pwd'],FILTER_SANITIZE_STRING);
	$sql3="insert into belajarhack1.pengguna values (
       '".$kodelogin."','".$namapengguna."','".$pwd."')";
	$q3=mysqli_query($koneksi,$sql3);
if ($q3) {
	echo "Tabel pengguna berhasil diisi !<br>";
	} else {
	echo "Tabel pengguna gagal diisi !<br>";
	}   
}
?>
