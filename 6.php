<?php
	
$conn = mysqli_connect("localhost","root","","tes_arkademy");

if (isset($_POST['add-programmer']))
{
	$name = $_POST['programmer-name'];
	$q = "INSERT INTO users(name) VALUES('$name')";
	if (mysqli_query($conn,$q))
	{
		echo "<script>alert('berhasil menambah data programer baru')</script>";
	}
	else { echo "<script>alert(".mysqli_error($conn).")</script>"; }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Programmer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		center, span, td { font-size: 1.6em; font-weight: lighter; }
		body {
			padding: 2%;
		}

		.input { height: 27px; }

		.input-container { margin-top: 4%; }

		#table { margin-top: 1%; }

		td .input { margin-top: 2%; margin-bottom: -1%; }
		td input[type=submit] { margin-top: 3%; }
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			
			<div class="span12">
				<center>Data Programmer</center>
			</div>

			<div class="input-container">
			<div class="row">
				<form method="post">
				<div class="span6 offset2">
					<input class="input span6" type="text" name="programmer-name" data-min-length="8" placeholder="Masukkan Nama.." required>
				</div>

				<div class="span2">
					<input type="submit" class="btn btn-primary btn-large" value="Tambah Data" name="add-programmer">
				</div>
				</form>
			</div>

			</div>
		</div>
	</div>

	<table align="center" width="80%" border="1" cellspacing="0" id="table">
	<tr>
		<td width="3%">No.</td>
		<td width="57%">Nama</td>
		<td width="40%"></td>
	</tr>
	<?php
	$no = 1;
	$query = mysqli_query($conn,"SELECT * FROM users");
	while ($user = mysqli_fetch_assoc($query))
	{ ?>
		<tr>
			<td><?= $no ?></td>
			<td><?= $user['name'] ?></td>
			<td align="center" valign="center">
				<form method="post">
				<input class="input" type="text" name="skill-name" data-min-length="8" placeholder="Tambah Skill..">
				<input type="submit" name="add-skill" value="Tambah" class="btn btn-large btn-primary">
				</form>
			</td>
		</tr>
	<?php $no++; } ?>
	</table>
</body>
</html>