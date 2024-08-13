<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Interactions extends Migration
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
            'customer_id' => [
                'type'       => 'INT',
            ],
            'type' => [
                'type'       => 'ENUM',
                'constraint' => ['call', 'email', 'meeting'],
            ],
            'details' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'date' => [
				'type'  => 'TIMESTAMP',
				'default' => new RawSql('CURRENT_TIMESTAMP'),
            ]
        ]);
        
        $this->forge->addKey('id', true);

        $this->forge->createTable('interactions');

        // FOREIGN KEY (customer_id) REFERENCES customers(id)
        $this->forge->addForeignKey('customer_id', 'customers', 'id');
    }

    public function down()
    {
        $this->forge->dropTable('interactions');
    }
}
