<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
      //User::factory()->count(100)->create(); can be write as shown below
      User::factory(100)->create();





      //   User::create([
      //      'name' => 'Anish',
      //      'email'=> 'anish@gmail.com',
      //      'date_of_birth' => '1981-08-12',
      //   ]);

      //   User::create([
      //       'name' => 'deepa',
      //       'email'=> 'deepa@gmail.com',
      //       'date_of_birth' => '1986-02-17',
      //    ]);

      //    User::create([
      //       'name' => 'Juan',
      //       'email'=> 'juan@gmail.com',
      //       'date_of_birth' => '2015-11-11',
      //    ]);
    }
}
