<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'n_mhsiswa' => [
                'type' => 'VARCHAR',
                'constraint' => 30,

            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'buku' => [
                'type' => 'VARCHAR',
                'constraint' => "255",
            ],
            't_pinjam' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            't_kembali' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addPrimaryKey('n_mhsiswa');
        $this->forge->createTable('peminjaman');
    }
    //--------------------------------------------------------------------
    public function down()
    {
        $this->forge->dropTable('peminjaman');
    }
}
