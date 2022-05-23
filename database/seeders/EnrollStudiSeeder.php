<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EnrollStudi;

class EnrollStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EnrollStudi::create([
            'user_id' => 1,
            'kelas_id' => 2,
            'semester' => 3,
            'isComplete' => 0,
        ]);
        EnrollStudi::create([
            'user_id' => 1,
            'kelas_id' => 1,
            'semester' => 5,
            'isComplete' => 0,
        ]);
        EnrollStudi::create([
            'user_id' => 1,
            'kelas_id' => 3,
            'semester' => 2,
            'isComplete' => 0,
        ]);
    }
}
