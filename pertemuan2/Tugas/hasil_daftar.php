<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-4 mb-4">
		<h2>Data Pendaftar</h2>
		<table class="table table-hover rounded">
			<thead class="table-dark">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Lengkap</th>
					<th scope="col">Email</th>
					<th scope="col">Alamat</th>
					<th scope="col">Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>

				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */

				  if(isset($_POST['submit'])){

					  // variabel untuk menangkap data
					  $no = $_POST['no'];
					  $nama = $_POST['nama_lengkap'];
					  $email = $_POST['email'];
					  $alamat = $_POST['alamat'];
					  $telepon = $_POST['tlp'];
  
					  // $total_nilai = ($uts * 0.3) + ($uas * 0.35) + ($tugas * 0.35);
					  
  
					  // Tampilkan data variabel
					  echo '<tr>';
					  echo '<td>' . $no;
					  echo '<td>' . $nama;
					  echo '<td>' . $email;
					  echo '<td>' . $alamat;
					  echo '<td>' . $telepon;
					  echo '</tr>';
					  // echo '<hr>';
					  // echo 'Nilai Total : ' . $total_nilai;
				  }

				?>

			</tbody>
		</table>
	</div>
</body>
</html>