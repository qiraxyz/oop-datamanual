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
										<td><?php echo $dbload->nama ?></td>
										<td><?php echo $dbload->kelas ?></td>
										<td><?php echo $dbload->jurusan ?></td>
                                        <td><?php echo $dbload->sekolah ?></td>
										
										<td><?php echo $dbload->aksesp()?></td>
										<td><?php echo $dbload->akses2()?></td>
										<td><?php echo $dbload->akses3()?></td>
										<td><?php echo $dbload->akses4()?></td>
										
									</tr>
						</tbody>
					</table>
</body>
</html>