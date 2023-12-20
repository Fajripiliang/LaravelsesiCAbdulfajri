<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'npm'=>'2201170056',
            'nama'=>'Abdul Fajri Syaifi',
            'alamat'=>'Gunung pangilun',
            'no_hp'=>'081378313362',
        ]);
        //
    }
}
