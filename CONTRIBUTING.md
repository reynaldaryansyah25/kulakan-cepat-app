# Contributing to Kulakan Cepat App

Terima kasih telah tertarik untuk berkontribusi pada Kulakan Cepat App! Panduan ini akan membantu Anda memahami proses kontribusi kami.

## Code of Conduct

Proyek ini mematuhi [Contributor Covenant Code of Conduct](CODE_OF_CONDUCT.md). Dengan berpartisipasi, Anda diharapkan mematuhi kode ini.

## Cara Berkontribusi

### Melaporkan Bug

Jika Anda menemukan bug, silakan buka issue dengan informasi berikut:

- Deskripsi singkat dari bug
- Langkah-langkah untuk mereproduksi
- Expected behavior
- Actual behavior
- Screenshots (jika relevan)
- Environment: PHP version, Laravel version, OS, dll

### Mengusulkan Fitur

Untuk mengusulkan fitur baru:

1. Buka issue dengan label `enhancement`
2. Jelaskan use case dan manfaat fitur
3. Tunggu feedback dari maintainer

### Pull Request

1. Fork repository
2. Buat branch feature: `git checkout -b feature/AmazingFeature`
3. Commit changes: `git commit -m 'Add some AmazingFeature'`
4. Push ke branch: `git push origin feature/AmazingFeature`
5. Buka Pull Request dengan deskripsi yang jelas

### Coding Standards

- Ikuti [PSR-12](https://www.php-fig.org/psr/psr-12/)
- Gunakan meaningful variable names
- Tambahkan comments untuk logic yang kompleks
- Format code dengan Laravel Pint: `./vendor/bin/pint`

### Testing

- Tulis test untuk fitur baru
- Pastikan semua test pass: `php artisan test`
- Maintain code coverage

### Git Commit Messages

- Gunakan imperative mood ("add feature" bukan "added feature")
- Limit subject line ke 50 character
- Reference issues: "fixes #123"
- Contoh: `feat: add user authentication` atau `fix: resolve order calculation bug`

### Documentation

- Update README jika diperlukan
- Tambahkan comments di code yang kompleks
- Update CHANGELOG.md

## Development Setup

```bash
git clone https://github.com/reynaldaryansyah25/kulakan-cepat-app.git
cd kulakan-cepat-app
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
```

## Menjalankan Tests

```bash
php artisan test
```

## Pertanyaan?

Jika ada pertanyaan, silakan buka discussion atau hubungi maintainer.

Terima kasih atas kontribusi Anda! 🎉
