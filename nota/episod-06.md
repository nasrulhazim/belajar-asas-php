# Associative Array atau Tatasusunan Berkaitan

**Objektif:** Memudahkan penstrukturan dan akses kepada maklumat dengan menggunakan *Associative Array*. 

## Format

```php
$var = [
	'key' => 'value',
];
```

Contoh:

```php
$maklumat_asas_pelajar = [
    'nama'       => 'Nasrul Hazim',
    'kad_matrik' => 'A10000',
    'jurusan'    => 'Sains Komputer',
];

// Cara akses kepada maklumat
echo $maklumat_asas_pelajar['nama'];

// Cara umpukkan maklumat
$maklumat_asas_pelajar['nama'] = 'Nasrul Hazim Bin Mohamad';
```

Contoh yang lebih kompleks:

```php
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

// Cara akses kepada maklumat
echo $maklumat_asas_pelajar['maklumat_asas_pelajar']['nama'];

// Cara umpukkan maklumat
$maklumat_asas_pelajar['maklumat_asas_pelajar']['nama'] = 'Nasrul Hazim Bin Mohamad';
```
