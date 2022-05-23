<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EnrollMataKuliah;

class EnrollMataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EnrollMataKuliah::create([
            'user_id' => 1,
            'mata_kuliah_id' => 2,
            'enroll_studi_id' => 1,
            'semester' => 3,
            'nilai_akhir' => 100,
            'isComplete' => 0,
            'isStart' => 1,
            'dosen_id' => 1,
        ]);
        EnrollMataKuliah::create([
            'user_id' => 1,
            'mata_kuliah_id' => 3,
            'enroll_studi_id' => 1,
            'semester' => 6,
            'nilai_akhir' => 90,
            'isComplete' => 0,
            'isStart' => 1,
            'dosen_id' => 1,
        ]);
        EnrollMataKuliah::create([
            'user_id' => 3,
            'mata_kuliah_id' => 1,
            'enroll_studi_id' => 2,
            'semester' => 3,
            'nilai_akhir' => 80,
            'isComplete' => 0,
            'isStart' => 1,
            'dosen_id' => 1,
        ]);
    }
}
