<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Tabel Pengguna</h2>

<table>
  <tr>
    <th>Kode Login</th>
    <th>Nama Pengguna</th>
  </tr>
 <?php 
$koneksi=mysqli_connect("localhost","root","","belajarhack1");
$sql="select * from pengguna;";
$q=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_array($q);
do {
?> 
  <tr>
    <td><?php echo filter_var($r['kodelogin'],FILTER_SANITIZE_STRING);?></td>
    <td><?php echo filter_var($r['namapengguna'],FILTER_SANITIZE_STRING);?></td>
  </tr>
<?php
} while($r=mysqli_fetch_array($q));
?>  
</table>

</body>
</html>