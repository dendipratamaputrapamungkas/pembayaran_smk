<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('12345'),
                'role_id' => 1
            ],
            [
                'username' => 'user',
                'email' => 'user@mail.com',
                'password' => bcrypt('12345'),
                'role_id' => 2
            ],
            [
                'username' => 'kepalasekolah',
                'email' => 'kepalasekolah@mail.com',
                'password' => bcrypt('12345'),
                'role_id' => 3
            ],
        ];
        DB::table('users')->insert($data);
    }
}
