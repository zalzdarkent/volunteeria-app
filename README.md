<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tampilan admin volunteeria

Volunteeria merupakan aplikasi berbasis web yang bertujuan untuk memfasilitasi pencarian lowongan volunteer, memudahkan pencarian lowongan yang lebih spesifik dengan fitur pencarian berdasarkan lokasi, menghubungkan organisasi dengan calon volunteer, dan meningkatkan partisipasi dalam kegiatan sukarelawan.

## Fitur tampilan admin

- Menyediakan fitur untuk mem-publish lowongan volunteer dari masing-masing organisasi.

- Menyediakan berita yang dapat ditulis langsung oleh masing-masing organisasi

- Aplikasi ini masih belum support untuk multi user karena hanya tahap percobaan atau tahap prospek teknologi library open source yang terbaru

Kami masih dalam tahap pengembangan fitur, jika ada saran mengenai fitur selanjutnya bisa dikirim melalui instagram saya @zalz_ummar19

## Cara menjalankan aplikasi
1. clone terlebih dahulu ke dalam laptop atau device kalian.

2. Setelah di-clone selanjutnya adalah copy file `.env.example` lalu paste dan beri nama `.env`

3. Jalankan perintah ini
`composer install`

4. Setelah itu ketikan 
`php artisan key:generate` untuk membuat APP_KEY.

5. Lalu cari file `.env` lagi dan sesuaikan database yang kamu gunakan lalu buat database tersebut.

6. Setelah membuat database, ketikan perintah `php artisan migrate` untuk membuat table database sesuai dengan yang sudah dibuat dalam projek laravel.

7. Selanjutnya kamu dapat menjalankan laravel tersebut dengan mengetik `php artisan serve`

## Lisensi
Aplikasi Volunteeria bersifat open source. Anda dapat mengubah, lalu publish ke internet.

Note: jangan lupa berikan credit jika projek ini dimuat ke internet, hak cipta dilindungi.

