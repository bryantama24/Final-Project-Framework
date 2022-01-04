<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;



class PinjamSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'n_mhsiswa' => 'Atto',
                'alamat' => 'Jl. Garuda',
                'jurusan' => 'Teknik Informatika',
                'buku' => '1998',
                't_pinjam' => '31-12-2021',
                't_kembali' => '7-01-2022',
            ],
            [
                'n_mhsiswa' => 'Batto',
                'alamat' => 'Jl. Kecipir',
                'jurusan' => 'Teknik Informatika',
                'buku' => '1998',
                't_pinjam' => '31-12-2021',
                't_kembali' => '9-01-2022',
            ]
        ];
        $this->db->table('peminjaman')->insertBatch($data);
    }
}
