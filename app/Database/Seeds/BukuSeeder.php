<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class BukuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_buku' => '1001',
                'nama_buku' => '1998',
                'jenis_buku' => 'Sejarah',
                'stok' => '19',
                'no_rak' => 'A1',
            ],
            [
                'kode_buku' => '1002',
                'nama_buku' => 'Dilan',
                'jenis_buku' => 'Novel',
                'stok' => '29',
                'no_rak' => 'A2',
            ]
        ];
        $this->db->table('buku')->insertBatch($data);
    }
}
