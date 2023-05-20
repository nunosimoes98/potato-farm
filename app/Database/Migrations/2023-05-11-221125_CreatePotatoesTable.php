<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePotatoesTable extends Migration
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
            'tipo_batata' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'tempo' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => true,
            ],
            'espaco' => array(
                'type' => 'DECIMAL',
                'constraint' => '5,2',
                'null' => FALSE,
                'default' => 0.00
                ),                
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('potatoes');
    }

    public function down()
    {
        //
    }
}
