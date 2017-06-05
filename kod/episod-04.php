<?php

$nama      = 'Nasrul Hazim';
$umur      = 31;
$tajuk     = 'Belajar PHP';
$sub_tajuk = 'Pemboleh Ubah';
?>


<!DOCTYPE html>
<html>
<head>
	<title><?=$tajuk;?> - <?=$sub_tajuk;?></title>
</head>
<body>
	<h1>
<?php
echo 'Hello ' . $nama . ' (' . $umur . ') from echo php';
?>
	</h1>
	<h1>
	<?="Hello $nama($umur)!"?>
	</h1>
	<h2><?='hello world using shortcut';?>
</body>
</html>
