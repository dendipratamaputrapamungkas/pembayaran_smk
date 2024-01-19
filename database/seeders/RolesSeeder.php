<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
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
                'id' => 1,
                'nama_role' => 'admin'
            ],
            [
                'id' => 2,
                'nama_role' => 'user'
            ],
            [
                'id' => 3,
                'nama_role' => 'kepala sekolah'
            ]
        ];
        DB::table('roles')->insert($data);
    }
}
