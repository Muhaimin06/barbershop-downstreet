# Barbershop Downstreet

Website promosi statis berbasis Laravel dan Blade untuk Barbershop Downstreet di Ende. Website ini tidak memakai database, login, booking, atau dashboard.

## Anggota kelompok

1. Muhaimin Mahmud
2. Ikram B. Kaluli
3. Dhita Faradhiatul Hakim
4. Nadia Afrianti

## Menjalankan secara lokal

Persyaratan: PHP 8.3+ dan Composer.

```powershell
composer run setup
php artisan serve
```

Buka alamat yang ditampilkan Artisan, biasanya `http://127.0.0.1:8000`.

## Struktur halaman

- `routes/web.php` — route halaman utama.
- `resources/views/layouts/app.blade.php` — layout dan pemanggilan asset.
- `resources/views/home.blade.php` — konten promosi.
- `resources/views/partials/` — navbar dan footer.
- `public/css/style.css` — tema, layout, dan responsive styles.
- `public/js/script.js` — menu mobile, animasi, dan galeri lightbox.

## Memperbarui informasi usaha

Edit teks dan tautan WhatsApp, alamat, rating, harga, jam operasional, dan Instagram di `resources/views/home.blade.php`; tautan WhatsApp di navbar ada di `resources/views/partials/navbar.blade.php`. Harga dan jam buka sengaja tidak diisi karena belum dikonfirmasi. Ganti foto ilustrasi dengan foto Downstreet setelah tersedia; foto saat ini diberi penanda dan bukan dokumentasi tempat usaha.

Font, ikon, foto ilustrasi, dan peta memakai layanan eksternal sehingga koneksi internet diperlukan untuk menampilkannya.
