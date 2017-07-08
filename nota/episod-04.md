# Belajar Asas PHP - Episod 4

**Objektif:** Memahami penggunaan PHP dalam HTML.

Anda akan belajar:

1. Bagaimana menggunakan PHP dalam HTML
2. Bagaimana menggunkan pembolehubah (variable)
3. Mengenali apa itu String
4. Bagaimana hendak menggunakan pembolehubah dengan string
5. Bagaimana hendak mencantumkan String

## Bagaimana menggunakan PHP dalam HTML

Contoh Kod:

```php
<!DOCTYPE html>
<html>
<head>
	<title>Belajar Asas PHP</title>
</head>
<body>
	<h1>
		<-- 
			Kaedah pertama untuk paparkan maklumat
			pada pelayar
		-->
		<?php
			echo 'Hello wolrd';
		?>
	</h1>
	<h1>
		<-- 
			Kaedah kedua untuk paparkan maklumat
			pada pelayar
		-->
		<?='Hello wolrd'?>
	</h1>
</body>
</html>
```

## Bagaimana menggunakan pembolehubah (variable)

Pembolehubah boleh dikenalpasti dengan adanya elemen-elemen yang berikut:

1. Bermula dengan simbol dollar (**$**), diikuti dengan nama pembolehubah.
2. Pembolehubah **WAJIB** bermula dengan **HURUF** atau **TANDA BARIS BAWAH** (_).
3. Pembolehubah tidak boleh bermula dengan nombor
4. Pembolehubah hanya mempunyai *alpha-numeric* aksara dan tanda baris bawah  (A-z, 0-9, and _ ).
5. Nama pembolehubah adalah *case-sensitive* (**$age** dan **$AGE** adalah dua pembolehubah yang berlainan).

Contoh pembolehubah:

```php
$nama      = 'Nasrul Hazim';
$umur      = 31;
$tajuk     = 'Belajar PHP';
$sub_tajuk = 'Pemboleh Ubah';
```

## Mengenali apa itu String

*String* adalah rentetan - sekumpulan aksara yang membina perkataan atau ayat.

*String* selalunya dikapsulkan dengan *single quote* (') atau *double quote* (").

Kita boleh melihat pada contoh `Hello World` dalam episod sebelum ini.

```php
<?php
	echo 'Hello World';
	echo "Hello World";
```

## Bagaimana hendak menggunakan pembolehubah dengan String dan mencantumkan String

Terdapat dua cara dalam menggunakan pembolehubah dengan *String*:

Pertama:

```php
<?php
	$nama = 'Nasrul Hazim';

	echo 'Hello ' . $nama . '!';
```

Kedua:

```php
<?php
	$nama = 'Nasrul Hazim';

	echo "Hello $nama";
```

Perhatikan penggunaan titik (.) bagi penyambungan *String* dengan menggunakan pembolehubah dalam cara yang pertama.

Dan cara kedua tanpa menggunakan sebarang titik bagi penyambungan *String*. Cara kedua hanya boleh digunakan jika anda menggunakan *double quote*.
