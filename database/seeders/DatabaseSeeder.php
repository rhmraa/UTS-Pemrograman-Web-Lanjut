<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1 User
        User::create([
            'name' => 'Admin',
            'email' => 'admin@utskepegawaian.test',
            'password' => Hash::make('password123'),
        ]);

        // 3 Departments
        $teknologi = Department::create([
            'name' => 'Teknologi Informasi',
        ]);

        $sdm = Department::create([
            'name' => 'Sumber Daya Manusia',
        ]);

        $keuangan = Department::create([
            'name' => 'Keuangan',
        ]);

        // 5 Employees
        Employee::create([
            'department_id' => $teknologi->id,
            'name' => 'Andi Saputra',
            'position' => 'Staff IT',
            'salary' => 3500000,
            'joined_at' => '2024-01-15',
        ]);

        Employee::create([
            'department_id' => $teknologi->id,
            'name' => 'Budi Santoso',
            'position' => 'Programmer',
            'salary' => 4500000,
            'joined_at' => '2024-03-01',
        ]);

        Employee::create([
            'department_id' => $sdm->id,
            'name' => 'Citra Lestari',
            'position' => 'Staff HR',
            'salary' => 4000000,
            'joined_at' => '2024-02-10',
        ]);

        Employee::create([
            'department_id' => $sdm->id,
            'name' => 'Dian Permata',
            'position' => 'Recruiter',
            'salary' => 4200000,
            'joined_at' => '2024-04-20',
        ]);

        Employee::create([
            'department_id' => $keuangan->id,
            'name' => 'Eko Prasetyo',
            'position' => 'Staff Keuangan',
            'salary' => 3800000,
            'joined_at' => '2024-05-05',
        ]);
    }
}