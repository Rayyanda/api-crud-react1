<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('mahasiswa')->insert([
            'mhs_id' => Str::uuid(),
            'nim' =>"2022240029",
            'nama' => "Rayyanda",
            "jenis_kelamin" => "Laki-laki",
            "prodi_id" => 4,
            'fakultas_id' => 1,
            'tanggal_lahir' => \Carbon\Carbon::parse("2003-11-5"),
            'alamat' => "Jl. Bintara",
            'email'=> "rayy@gmail.com",
            
        ]);
    }
}
