<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $builder = $this->db->table("students");

        // $builder->insert([
        //     "name" => "Ajak Anka",
        //     "email" => "ankaajak@wp.pl",
        //     "phone" => "3344556633"
        // ]);

        for($i = 0; $i < 500; $i++){
            $builder->insert($this->generateStudent());
        }
    }

    public function generateStudent() 
    {
        $faker = Factory::create();

        return [
            "name" => $faker->name,
            "email" => $faker->email,
            "phone" => $faker->phoneNumber,
        ];
    }
}
