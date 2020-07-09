<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   for ($i=0; $i < 10 ; $i++) {
        $newStudent = new Student();
        $newStudent->name = $faker->firstname;
        $newStudent->surname = $faker->lastname;
        $newStudent->registration_number = $faker->swiftBicNumber;
        $newStudent->email = $faker->freeEmail;
        $newStudent->save();
        }
    }
}
