<?php

namespace Database\Seeders;

use App\Models\Admin\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
