<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Student::firstOrCreate(
            ['email' => 'ruffasapan@gmail.com'], 
            ['name' => 'Ruffa Mae Sapan', 'age' => 20]
        );

        Student::firstOrCreate(
            ['email' => 'crestuayon@gmail.com'],
            ['name' => 'Crestian Tuayon', 'age' => 22]
        );

        Student::firstOrCreate(
            ['email' => 'jemlenalbios@gmail.com'],
            ['name' => 'Jemlen Albios', 'age' => 21]
        );
    }
}
