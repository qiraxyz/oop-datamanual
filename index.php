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
						<?php 
                $dbloads = $dbload->aksesp($_POST['email'], $_POST['nohp'], $_POST['kelamin'], $_POST['alamat']);
                // var_dump($dbsiswa)
                ?>
									<tr>
										<td><?php echo $dbload->nama ?></td>
										<td><?php echo $dbload->kelas ?></td>
										<td><?php echo $dbload->jurusan ?></td>
                                        <td><?php echo $dbload->sekolah ?></td>
										
										<td><?= $dbloads["email"] ?></td>
										<td><?= $dbloads["nohp"] ?></td>
										<td><?= $dbloads["kelamin"] ?></td>
										<td><?= $dbloads["alamat"] ?></td>
										
									</tr>
						</tbody>
					</table>
</body>
</html>