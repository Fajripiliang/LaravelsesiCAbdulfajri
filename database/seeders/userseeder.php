<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB/ DB::table('users')->insert([
        'name'=>"Abdul Fajri Syaifi",
        'fajripiliang260104@gmail.com',
        'passworrd'=>
        Hash::make('12345678'),
        ]);
    }
}
