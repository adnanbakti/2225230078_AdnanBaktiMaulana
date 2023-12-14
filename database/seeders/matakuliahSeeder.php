<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class matakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkuls')->insert([
            'namamatakuliah' => 'Metode Statistika',
            'jumlahsks' => '3',
            'dosenpengampu' => 'Dra. Ilmiyati Rahayu, M.Si.'
        ]);
    }
}
