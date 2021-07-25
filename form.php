<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test Back End</title>
</head>
<body>
	<form method="GET" name="formpost" action="welcome.php">
		<table align="center" border="1" cellpadding="0" cellspacing="0" >
			<tr align="center"><td><h2><b>Masukkan Biodata</b></h2></td></tr>
			<tr>
				<td>
					<table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
						<tr>
							<td>Nama</td>
							<td> : </td>
							<td><input type="text" name="nama" size="40"/></td>
						</tr>

						<tr>
							<td>Usia</td>
							<td> : </td>
							<td><input type="number" name="usia" size="40"/></td>
						</tr>

						<tr>
							<td>Kota</td>
							<td> : </td>
							<td><input type="text" name="kota" size="40" /></td>
						</tr>

						<tr>
							<td colspan="3" align="center"><input type="submit" name="btnSimpan" value="Simpan"/></td>
						</tr>
						
					</table>
				</td>
			</tr>


</body>
</html>