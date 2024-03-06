<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('fakultas')->insert([
            ['nama_fakultas'=>'Teknik','tahun_berdiri'=>'1992'],
            ['nama_fakutlas'=>'Teknik Perkapalan','tahun_berdiri'=>'2005'],
            ['nama_fakultas'=>'Ekonomi','tahun_berdiri'=>'1986'],
            ['nama_fakultas'=>'Sastra','tahun_berdiri'=>'1986']
        ]);
    }
}
