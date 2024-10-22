<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 50; $i++) {


            DB::table('pegawai')->insert([
                'pegawai_nama' => $faker->name(),
                'pegawai_jabatan' => $faker->jobTitle(),
                'pegawai_umur' => $faker->numberBetween(25, 40),
                'pegawai_alamat' => $faker->address()
            ]);
        }
    }
}
