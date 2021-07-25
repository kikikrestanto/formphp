<html>
<body>

<center>
				<table border="1" cellpadding="2" cellspacing="4" align="center">
					<?php 
						if(isset($_GET['nama']) AND isset($_GET['usia']) AND isset($_GET['kota']))
						{
							$nama = $_GET['nama'];
							$usia = $_GET['usia'];
							$kota = $_GET['kota'];
						}
						

						else 
						{
							die("Maaf, anda harus mengakses halaman ini dari form.php");
						}

						if (empty($nama))
						{
							die("Maaf, anda harus mengisi nama");
						}
						else 
						{
							if(is_numeric($nama) AND is_numeric($kota))
							{
								die("maaf, nama dan kota harus berupa huruf");
							}
							else
							{
								echo "Nama: $nama <br /> Usia: $usia <br /> Kota: $kota";
							}
						}

			?>
				</table>
			</center>

</body>
</html>