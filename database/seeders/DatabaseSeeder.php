<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RolesSeeder::class,
            DummyUser::class,
            UsersSeeder::class,
            JurusanSeeder::class,
            TahunAjaranSeeder::class,
            SiswaSeeder::class,
            UDBSeeder::class,
            DetailBiayaSeeder::class,
            PembayaranSeeder::class
        ]);
    }
}
