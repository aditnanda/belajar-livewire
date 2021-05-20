<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'nama' => 'Aditya'
        ]);

        for ($i=0; $i < 10; $i++) { 
            Student::create([
                'nama' => 'Aditya ke '.$i
            ]);
        }
    }
}
