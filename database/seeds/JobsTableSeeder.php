<?php

use Illuminate\Database\Seeder;
use App\Job;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create(
            [
               'title' => 'Jenitor',
               'description' => 'nothing much just a cleaner',
               'level' => 'O-level',
               'category' => 'cleaning'
           ]
       );

       Job::create(
           [
               'title' => 'Jenitor',
               'description' => 'nothing much just a cleaner',
               'level' => 'O-level',
               'category' => 'cleaning'
           ]
       );
       //To insert jobs into the table
    }
}
