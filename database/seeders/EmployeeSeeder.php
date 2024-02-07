<?php

namespace Database\Seeders;

use App\Models\employee;
use App\Models\Employee as ModelsEmployee;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 15; $i++) { 
            ModelsEmployee::ceate(
                [
                    'first_name' => 'Employee',
                    'last_name' => 'Seed',
                    'date_birth' => Carbon::create(1990, 1, 1),
                    'phone_number' => '081234567890',
                    'email' => 'coba@coba.com',
                    'province' => 'Jawa Barat',
                    'city' => 'Bandung',
                    'address' => 'Jl. Coba',
                    'zip_code' => '12345',
                    'ktp' => '1234567890123456',
                    'position' => 'Staff',
                    'bank' => 'BCA'
                ]
            );
        }
    }
}
