<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'nim' => '2021001',
                'nama' => 'Ahmad Rizki',
                'email' => 'ahmad.rizki@email.com',
                'jurusan' => 'Teknik Informatika',
                'alamat' => 'Jl. Sudirman No. 123, Jakarta Pusat',
                'no_telp' => '081234567890'
            ],
            [
                'nim' => '2021002',
                'nama' => 'Siti Nurhaliza',
                'email' => 'siti.nurhaliza@email.com',
                'jurusan' => 'Sistem Informasi',
                'alamat' => 'Jl. Thamrin No. 45, Jakarta Selatan',
                'no_telp' => '081234567891'
            ],
            [
                'nim' => '2021003',
                'nama' => 'Budi Santoso',
                'email' => 'budi.santoso@email.com',
                'jurusan' => 'Teknik Komputer',
                'alamat' => 'Jl. Gatot Subroto No. 67, Jakarta Barat',
                'no_telp' => '081234567892'
            ],
            [
                'nim' => '2021004',
                'nama' => 'Dewi Sartika',
                'email' => 'dewi.sartika@email.com',
                'jurusan' => 'Manajemen Informatika',
                'alamat' => 'Jl. Asia Afrika No. 89, Bandung',
                'no_telp' => '081234567893'
            ],
            [
                'nim' => '2021005',
                'nama' => 'Rudi Hermawan',
                'email' => 'rudi.hermawan@email.com',
                'jurusan' => 'Teknik Elektro',
                'alamat' => 'Jl. Malioboro No. 12, Yogyakarta',
                'no_telp' => '081234567894'
            ],
            [
                'nim' => '2021006',
                'nama' => 'Nina Kartika',
                'email' => 'nina.kartika@email.com',
                'jurusan' => 'Ekonomi',
                'alamat' => 'Jl. Diponegoro No. 34, Semarang',
                'no_telp' => '081234567895'
            ],
            [
                'nim' => '2021007',
                'nama' => 'Eko Prasetyo',
                'email' => 'eko.prasetyo@email.com',
                'jurusan' => 'Manajemen',
                'alamat' => 'Jl. Ahmad Yani No. 56, Surabaya',
                'no_telp' => '081234567896'
            ],
            [
                'nim' => '2021008',
                'nama' => 'Maya Indah',
                'email' => 'maya.indah@email.com',
                'jurusan' => 'Akuntansi',
                'alamat' => 'Jl. Merdeka No. 78, Medan',
                'no_telp' => '081234567897'
            ],
            [
                'nim' => '2021009',
                'nama' => 'Agus Setiawan',
                'email' => 'agus.setiawan@email.com',
                'jurusan' => 'Teknik Mesin',
                'alamat' => 'Jl. Veteran No. 90, Palembang',
                'no_telp' => '081234567898'
            ],
            [
                'nim' => '2021010',
                'nama' => 'Ratna Sari',
                'email' => 'ratna.sari@email.com',
                'jurusan' => 'Teknik Sipil',
                'alamat' => 'Jl. Hayam Wuruk No. 11, Makassar',
                'no_telp' => '081234567899'
            ]
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
