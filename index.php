<?php
$maklumat_asas_pelajar = [
    'nama'       => 'Nasrul Hazim',
    'kad_matrik' => 'A10000',
    'jurusan'    => 'Sains Komputer',
];

$maklumat_ibu_bapa = [
    'nama_bapa' => 'Mohamad',
    'nama_ibu'  => 'Saripah',
];

$profil_pelajar = [
    'maklumat_asas_pelajar' => $maklumat_asas_pelajar,
    'maklumat_ibu_bapa'     => $maklumat_ibu_bapa,
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Maklumat Pelajar</title>
</head>
<body>
	<h1>
		<?=$profil_pelajar['maklumat_asas_pelajar']['nama'];?>
		<small>
			(<?=$profil_pelajar['maklumat_asas_pelajar']['kad_matrik'];?>)
		</small>
	</h1>
	<h1>
		Nama Bapa: <?=$profil_pelajar['maklumat_ibu_bapa']['nama_bapa'];?>
	</h1>
	<h1>
		Nama Ibu: <?=$profil_pelajar['maklumat_ibu_bapa']['nama_ibu'];?>
	</h1>
</body>
</html>
