<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            'nidn'=>'121212',
            'nama'=>'Thomson12',
            'alamat'=>'indarung',
            'no_hp'=>'081276152219',
        ]);
    }
}
