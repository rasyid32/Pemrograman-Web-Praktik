<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class penerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penerbit')->insert([
            [
                'nama' => 'Rasyid',
                'email' => 'rasyidp@gmail.com',
                'alamat' => 'jl.jetis',
            ],
            [
                'nama' => 'prayogo',
                'email' => 'prayogo@gmail.com',
                'alamat' => 'bantul',
            ]
        ]);
    }
}
