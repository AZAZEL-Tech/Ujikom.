<!DOCTYPE html>
<html>
<head>
 <title>Cetak Laporan</title>
</head>
<body>
 <style type="text/css">
 body{
  font-family: sans-serif;
 }
 table{
  margin: 20px auto;
  border-collapse: collapse;
 }
 table th,
 table td{
  border: 1px solidrgb(0, 0, 0);
  padding: 3px 8px;

 }
 a{
  background: blue;
  color: #fff;
  padding: 8px 10px;
  text-decoration: none;
  border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
        <h1 class='tengah'>Cetak laporan</h1>
        <br/>
        <div class='tengah'>
  <a target="_blank" href="cetak.php">Cetak Laporan</a>
        </div>
 <table>
  <tr>
   <th>Id</th>
   <th>Username</th>
   <th>Password</th>
   <th>Created</th>
  </tr>
  <?php
  // koneksi database
  $koneksi = mysqli_connect("localhost","root","","dimas");

  // menampilkan data pegawai
  $data = mysqli_query($koneksi,"select * from inventaris");
  while($d = mysqli_fetch_array($data)){
  ?>
  <tr>
   <td style='text-align: center;'><?php echo $d['id'] ?></td>
   <td><?php echo $d['id']; ?></td>
   <td><?php echo $d['username']; ?></td>
   <td><?php echo $d['password']; ?></td>
   <td><?php echo $d['created_ad']; ?></td>
  </tr>
  <?php
  }
  ?>
 </table>
</body>
</html>