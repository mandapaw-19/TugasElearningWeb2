# Aplikasi Data Mahasiswa - Laravel

Aplikasi web sederhana untuk mengelola data mahasiswa dengan fitur CRUD (Create, Read, Update, Delete) yang dibangun menggunakan framework Laravel.

## 🎯 Fitur Utama

- **Create**: Menambah data mahasiswa baru
- **Read**: Menampilkan daftar dan detail mahasiswa
- **Update**: Mengubah data mahasiswa yang sudah ada
- **Delete**: Menghapus data mahasiswa
- **Validasi Form**: Validasi input data yang ketat
- **Responsive Design**: Tampilan yang responsif menggunakan Bootstrap 5
- **Pagination**: Halaman beranda untuk data yang banyak
- **Flash Messages**: Notifikasi sukses/error yang informatif

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel 12.x
- **Frontend**: Bootstrap 5, Font Awesome
- **Database**: SQLite (default), MySQL/PostgreSQL (opsional)
- **PHP**: 8.2+

## 📋 Struktur Database

Tabel `students` dengan kolom:
- `id` (Primary Key)
- `nim` (Unique, String)
- `nama` (String)
- `email` (Unique, String)
- `jurusan` (String)
- `alamat` (Text)
- `no_telp` (String)
- `created_at` (Timestamp)
- `updated_at` (Timestamp)

## 🚀 Cara Menjalankan Aplikasi

### 1. Clone Repository
```bash
git clone <repository-url>
cd elearningweb2-datamahasiswa
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi Database
Edit file `.env` dan sesuaikan konfigurasi database:
```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite
```

Atau untuk MySQL:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password
```

### 5. Jalankan Migration dan Seeder
```bash
php artisan migrate:fresh --seed
```

### 6. Jalankan Server Development
```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

## 📱 Halaman yang Tersedia

### 1. Dashboard (Daftar Mahasiswa)
- **URL**: `/` atau `/students`
- **Fitur**: Menampilkan daftar mahasiswa dengan pagination
- **Aksi**: Lihat detail, Edit, Hapus

### 2. Tambah Mahasiswa
- **URL**: `/students/create`
- **Fitur**: Form untuk menambah data mahasiswa baru
- **Validasi**: NIM dan email harus unik

### 3. Detail Mahasiswa
- **URL**: `/students/{id}`
- **Fitur**: Menampilkan informasi lengkap mahasiswa
- **Aksi**: Edit, Hapus

### 4. Edit Mahasiswa
- **URL**: `/students/{id}/edit`
- **Fitur**: Form untuk mengubah data mahasiswa
- **Validasi**: NIM dan email harus unik (kecuali untuk record yang sedang diedit)

## 🔧 Validasi Data

### NIM
- Wajib diisi
- Maksimal 20 karakter
- Harus unik

### Nama
- Wajib diisi
- Maksimal 100 karakter

### Email
- Wajib diisi
- Format email yang valid
- Maksimal 100 karakter
- Harus unik

### Jurusan
- Wajib diisi
- Maksimal 50 karakter
- Pilihan dari dropdown

### Alamat
- Wajib diisi
- Maksimal 255 karakter

### Nomor Telepon
- Wajib diisi
- Maksimal 15 karakter

## 🎨 Tampilan

Aplikasi menggunakan desain modern dengan:
- **Bootstrap 5**: Framework CSS untuk tampilan responsif
- **Font Awesome**: Icon yang menarik
- **Card Layout**: Tampilan yang rapi dan terorganisir
- **Color Scheme**: Biru sebagai warna utama
- **Responsive**: Bekerja dengan baik di desktop dan mobile

## 📊 Data Sample

Aplikasi dilengkapi dengan 10 data sample mahasiswa dari berbagai jurusan:
- Teknik Informatika
- Sistem Informasi
- Teknik Komputer
- Manajemen Informatika
- Teknik Elektro
- Teknik Mesin
- Teknik Sipil
- Ekonomi
- Manajemen
- Akuntansi

## 🔒 Keamanan

- **CSRF Protection**: Semua form dilindungi dengan token CSRF
- **Input Validation**: Validasi ketat untuk semua input
- **SQL Injection Protection**: Menggunakan Eloquent ORM
- **XSS Protection**: Escape output otomatis oleh Blade

## 📝 Struktur File Penting

```
app/
├── Http/Controllers/
│   └── StudentController.php    # Controller untuk CRUD mahasiswa
├── Models/
│   └── Student.php              # Model Student
resources/views/
├── layouts/
│   └── app.blade.php           # Layout utama
└── students/
    ├── index.blade.php         # Halaman daftar mahasiswa
    ├── create.blade.php        # Form tambah mahasiswa
    ├── show.blade.php          # Detail mahasiswa
    └── edit.blade.php          # Form edit mahasiswa
database/
├── migrations/
│   └── create_students_table.php  # Migration tabel students
└── seeders/
    └── StudentSeeder.php          # Seeder data sample
routes/
└── web.php                        # Definisi route
```

## 🐛 Troubleshooting

### Error "Class not found"
```bash
composer dump-autoload
```

### Error Database
```bash
php artisan config:clear
php artisan cache:clear
```

### Permission Error (Linux/Mac)
```bash
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

## 📞 Kontak

Untuk pertanyaan atau masalah teknis, silakan hubungi developer.

## 📄 Lisensi

Proyek ini dibuat untuk keperluan pembelajaran dan tugas e-learning.

---

**Dibuat dengan ❤️ menggunakan Laravel**
