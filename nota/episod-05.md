# Jenis Data (Data Type)

**Objektif:** Memahami jenis-jenis data dalam PHP.

Terdapat 5 jenis data (*data type*) yang asas dalam pengaturcaraan PHP:

1. String
2. Integer
3. Float
4. Boolean
5. Array

## String atau aksara

```php
// Aksara | String
$nama = 'Nasrul Hazim';
```

## Integer

```php
// Integer
$umur      = 31;
$tajuk     = 'Belajar PHP';
$sub_tajuk = 'Pemboleh Ubah';
```

## Float atau Apung

```php
// Float | Apung
$jumlah = 20.20;
```

## Boolean

```php
// Boolean - Benar | Salah
$bankrup = false;

$bankrup = true;

if ($bankrup == true) {
    echo 'awak bankrup';
}
```

## Array atau Senarai atau Koleksi

```php
// Array | Senarai | Koleksi
$senarai_haiwan     = ['fish', 'cat', 'dog'];
$senarai_harga_ikan = [10, 20, 30];
$senarai_baju       = ['kemeja', 'tshirt'];

$xyz = [1, 23, 4, true, false, 'kemeja'];
```

### Cara Akses Nilai Dalam Senarai

```php
echo $xyz[5];
```

### Cara Umpuk (assign) Nilai dalam Pembolehubah

```php
$xyz[5] = 'tshirt';
```
