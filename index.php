<!-- <html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
  <link rel="stylesheet" type="text/css" href="styleIndex.css">
</head>
<body>

  <div class="container">
  	<h2><center>DATA PESERTA</center></h2>
  	<table class=" table table-bordered table-hovered" align="center">
  <tr class="tabel">
  	<th>id</th>
  	<th>username</th>
  	<th>password</th>
  	<th>level</th>
  	<th>fullname</th>
  </tr></div>
  <?php
  //  1. Lakukan include koneksi.php untuk membuat koneksi
  include('koneksi.php');
  // 2. Buat perintah SQL untuk menampilkan data
  $sql_tampil ="SELECT * FROM user";
  // 3. Jalankan perintah diatas dengan fungsi mysqli_query
  $peserta=mysqli_query($conn,$sql_tampil);
  // 4. Lakukan fetch dengan result type MYSQL_ASSOC
  while($data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
  	echo'
  	</tr>
  		<td>'.$data['id'].'</td>
  		<td>'.$data['username'].'</td>
  		<td>'.$data['password'].'</td>
  		<td>'.$data['level'].'</td>
  		<td>'.$data['fullname'].'</td>
  	</tr>';
  }
  ?>
</body>
</html> -->



<?php 
	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h1><center>Data Siswa</center></h1>
	<table>

		<tr>
			<td colspan="6">
				
			</td>
		</tr>

		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Fullname</th>
			<th>Data</th>
		</tr>

			<?php 
				$qry = mysqli_query($koneksi,"SELECT * FROM user");
				while($user = mysqli_fetch_array($qry)){
			 ?>

		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['level']; ?></td>
			<td><?php echo $user['fullname']; ?></td>

			<td>
			<a class="button border-green" href="edit.php?id=<?php echo $user['id']; ?>">Edit</a>
			<a onclick="return confirm('Yakin untuk menghapus ?')" class="button bg-red"
			href="hapus.php?id=<?php echo $user['id']; ?>">Hapus Data</a>
			<a href="tambah.php" class="button tambah">+</a>
			
			</td>
		</tr>

		<?php  
		}
		?>
	</table>
</body>
</html>