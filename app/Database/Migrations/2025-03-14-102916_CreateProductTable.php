<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'image'=> [
                'type'=> 'VARCHAR',
                'constraint'=> 255,
            ],
            'varian' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'stok'=> [
                'type'=> 'INT',
            ],
            'harga' => [
                'type' => 'INT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
