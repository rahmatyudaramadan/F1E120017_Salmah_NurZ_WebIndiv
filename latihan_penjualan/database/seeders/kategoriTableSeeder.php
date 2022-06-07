<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
        	'nama' => 'Makanan'
        ]);
        Kategori::create([
        	'nama' => 'Perlengkapan Rumah Tangga'
        ]);
        Kategori::create([
        	'nama' => 'Alat Belajar'
        ]);

    }
}
