<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('jurusan')->insert([
            ['nama_jurusan'=>'Teknik Mesin','fakultas_id'=>1],
            ['nama_jurusan'=>'Teknik Industri','fakultas_id'=>1],
            ['nama_jurusan'=>'Teknologi Informasi','fakultas_id'=>1],
            ['nama_jurusan'=>'Sistem Informasi','fakultas_id'=>1],
            ['nama_jurusan'=>'Teknik Elektro','fakultas_id'=>1],
            ['nama_jurusan'=>'Manajamen','fakultas_id'=>3],
            ['nama_jurusan'=>'Akuntansi','fakultas_id'=>3],
            ['nama_jurusan'=>'Sistem Perkapalan','fakultas_id'=>2],
            ['nama_jurusan'=>'Sastra dan Kebudayaan Jepang','fakultas_id'=>4],
            ['nama_jurusan'=>'Sastra dan Kebudayaan Inggris','fakultas_id'=>4],
            ['nama_jurusan'=>'Sastra dan Kebudayaan China','fakultas_id'=>4],
        ]);
    }
}
