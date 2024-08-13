<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'email'    => 'admincrm@gmail.com',
            'password' => password_hash('asdf', PASSWORD_BCRYPT)
        ];

        // Simple Queries
        $this->db->query('INSERT INTO users (username, email, password) VALUES(:username:, :email:, :password:)', $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
