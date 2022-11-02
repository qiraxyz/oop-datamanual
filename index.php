<?php include 'process.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-hover" border="1">
 <thead>
	<th>NAMA</th>
	<th>KELAS</th>
	<th>JURUSAN</th>
	<th>SEKOLAHAN</th>
	<th>EMAIL</th>
	<th>NOHP</th>
	<th>KELAMIN</th>
	<th>ALAMAT</th>
							</tr>
						</thead>
						<tbody>
									<tr>
										<td><?= $dbloads["nama"] ?></td>
										<td><?= $dbloads["kelas"] ?></td>
										<td><?= $dbloads["jurusan"] ?></td>
										<td><?= $dbloads["sekolah"] ?></td>
										
										<td><?= $dbloadd["email"] ?></td>
										<td><?= $dbloadd["nohp"] ?></td>
										<td><?= $dbloadd["kelamin"] ?></td>
										<td><?= $dbloadd["alamat"] ?></td>
										
									</tr>
						</tbody>
					</table>
</body>
</html>