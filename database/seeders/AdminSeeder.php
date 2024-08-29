<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',  // Nama Admin
            'email' => 'admin@example.com',  // Email Admin
            'password' => Hash::make('password123'),  // Password Admin (terenkripsi)
            'nip' => '123456789', // Nilai NIP yang valid
            'username' => 'admin123' // Nilai username yang valid
        ]);
    }
}
