<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KembaliSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'n_mhsiswa' => 'Atto',
                'alamat' => 'Jl. Garuda',
                'jurusan' => 'Teknik Informatika',
                'buku' => '1998',
                'denda' => '5000',
                't_kembali' => '7-01-2022',
            ],
            [
                'n_mhsiswa' => 'Batto',
                'alamat' => 'Jl. Garuda',
                'jurusan' => 'Teknik Informatika',
                'buku' => '1998',
                'denda' => '10000',
                't_kembali' => '9-01-2022',
            ]
        ];
        $this->db->table('pengembalian')->insertBatch($data);
    }
}
