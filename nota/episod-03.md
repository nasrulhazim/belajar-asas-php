# Belajar Asas PHP - Episod 3

**Objektif:** Asas permulaan kod PHP

Kelas kali ini adalah untuk kita:

1. Mulakan kod PHP
2. Paparkan sesuatu ayat atau perkataan
3. Komen dalam PHP
4. memaparkan aplikasi pada web

## Mulakan kod PHP

Kod PHP wajib disimpan dengan sambungan `.php` seperti:

1. index.php
2. info.php
3. tentang-kami.php
4. hubungi-kami.php

Kod PHP juga dimulakan dengan `<?php` dan diakhiri dengan `?>`, seperti

```php
<?php 

// mula taip kod anda
?>
```

P/S: Sepanjang pembelajaran kali ini, anda akan jarang nampak saya tutup kod saya dengan `?>`. Kenapa? Baca lebih lanjut [di sini](http://php.net/basic-syntax.instruction-separation)

## Paparkan sesuatu ayat atau perkataan

```php
<?php
// Paparkan Hello World pada pelayar
// dengan menggunakan single quote ('')
echo 'Hello world';

// Paparkan Hello World pada pelayar
// dengan menggunakan single quote ('')
echo "Hello world";
```

## Komen dalam PHP

```php
<?php

// Ini adalah komen dalam satu baris

/**
 * Ini adalah komen dalam satu blok
 * yang besar. Anda boleh komen
 * apa sahaja dalam blok komen ini.
 */
```

## Memaparkan aplikasi pada web

Taip arahan di bawah pada *terminal*

```bash
php -S localhost:9000
```

Dan buka pelayar anda dan taip: `localhost:9000`