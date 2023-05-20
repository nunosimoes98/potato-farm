<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFarmsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome_fazenda' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'espaco' => array(
                'type' => 'DECIMAL',
                'constraint' => '6,2',
                'null' => FALSE,
                'default' => 0.00
                ),                
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('farms');
    }

    public function down()
    {
        //
    }
}
