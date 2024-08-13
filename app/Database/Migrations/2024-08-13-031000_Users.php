<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Users extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
                'unique' => true,
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			// 'created_at' => [
			// 	'type'  => 'TIMESTAMP',
			// 	'default' => new RawSql('CURRENT_TIMESTAMP'),
			// ],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel
		$this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
