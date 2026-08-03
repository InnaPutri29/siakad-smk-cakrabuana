# SIAKAD SMK CAKRABUANA

**SIAKAD SMK CAKRABUANA** adalah Sistem Informasi Akademik berbasis web yang dirancang untuk membantu sekolah dalam mengelola data akademik secara komprehensif, mulai dari data siswa, guru, kurikulum, penjadwalan, hingga e-Raport.

Dibuat menggunakan framework **CodeIgniter 3.1.5** dan telah disesuaikan agar kompatibel dengan **PHP 8.x** serta **MySQL/MariaDB**.

---

## 🚀 Fitur Utama

- **Multi-Level Login (5 Level Role)**:
  - Admin
  - Walikelas
  - Guru
  - Keuangan
  - Siswa
- **Manajemen Data Master (CRUD)**:
  - Data Siswa & Import via CSV/Excel
  - Data Guru & Walikelas
  - Data Mata Pelajaran (Mapel)
  - Data Ruangan Kelas & Tingkatan Kelas
  - Data Jurusan & Tahun Akademik (Aktif)
  - Data Kelas & Kurikulum
- **Manajemen Pengguna & Hak Akses (User Rules)**:
  - Pengaturan Hak Akses Module per Level User secara dinamis.
- **Akademik & Nilai**:
  - Generate & Cetak Jadwal Pelajaran
  - Presensi & Input Nilai Siswa
  - Export Data Nilai (e-Raport)

---

## 🛠️ Prasyarat System

- **PHP**: PHP 8.x (atau PHP 7.4 / 5.6+)
- **Database**: MySQL / MariaDB (XAMPP / Laragon)
- **Web Server**: Built-in PHP CLI Web Server / Apache

---

## ⚙️ Petunjuk Penggunaan & Cara Menjalankan

### 1. Import Database
- Buat database baru bernama **`cakrabuana`** di MySQL / phpMyAdmin.
- Import file **`cakrabuana.sql`** yang terdapat di root project ke dalam database `cakrabuana`.

### 2. Konfigurasi Database & Base URL
- File konfigurasi database berada di [application/config/database.php](file:///d:/Downloads/SIAKAD%20SMK%20CAKRABUANA/siakad/application/config/database.php):
  - **Host**: `localhost`
  - **Username**: `root`
  - **Password**: `""` (kosong)
  - **Database**: `cakrabuana`

### 3. Menjalankan Local Server
Jalankan perintah berikut di terminal dari direktori `siakad`:

```bash
php -S localhost:8080 router.php
```

Buka browser dan akses: **`http://localhost:8080`**

---

## 🔑 Akun Login Bawaan (Default Credentials)

| Role / Level | Nama Lengkap | Username | Password |
|---|---|---|---|
| **Admin** | Admin | `admin` | `123456` |
| **Walikelas** | Inna | `inna` | `123456` |
| **Keuangan** | Hudan | `hudan` | `123456` |
| **Guru** | Lala | `lala` | `123456` |
| **Siswa** | Cinta | `cinta` | `123456` |

---

## 📝 Catatan Penting
- Project ini menggunakan `router.php` untuk mendukung penanganan routing CodeIgniter saat menggunakan PHP built-in web server (`php -S`).
