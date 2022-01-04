<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim' => 'C2055201001',
                'nama' => 'Atto',
                'jurusan' => 'Teknik Informatika',

                'jenis_kelamin' => 'pria',
                'no_telp' => '081234555678',
                'email' => 'attosadja@gmail.com',
                'alamat' => 'Jl. Garuda',

                'created_at' => Time::now()
            ],
            [
                'nim' => 'C2055201002',
                'nama' => 'Batto',

                'jurusan' => 'Teknik Informatika',

                'jenis_kelamin' => 'pria',
                'no_telp' => '08571234567',
                'email' => 'batto@gmail.com',
                'alamat' => 'Jl. Kecipir',

                'created_at' => Time::now()
            ],
            [
                'nim' => 'C2055201003',
                'nama' => 'Sofia',
                'jurusan' => 'Sistem Informasi',

                'jenis_kelamin' => 'wanita',
                'no_telp' => '08122334455',

                'email' => 'Sofia@gmail.com',
                'alamat' => 'Jl. Rembulan No. 90, Palangka

Raya',

                'created_at' => Time::now()
            ]
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
