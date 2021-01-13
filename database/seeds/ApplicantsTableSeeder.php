<?php

use Illuminate\Database\Seeder;
use App\Applicant;

class ApplicantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Applicant::create(
            [
               'email' => 'mangalajohana@yahoo.com',
               'firstname' => 'Mangala',
               'lastname' => 'Johana',
               'address' => 'lekki gardens',
               'resume_url' => 'https://google.com',
               'job_id' => 1
           ]
       );
       Applicant::create(
        [
           'email' => 'johnmicheal@gmail.com',
           'firstname' => 'Micheal',
           'lastname' => 'John',
           'address' => 'Akere Street Okokomaiko',
           'resume_url' => 'https://google.com',
           'job_id' => 2
       ]
   );
   Applicant::create(
    [
       'email' => 'ogunmichealprecious@gmail.com',
       'firstname' => 'Precious',
       'lastname' => 'Ogun-Micheal',
       'address' => 'Ajah',
       'resume_url' => 'https://google.com',
       'job_id' => 3
   ]
);
   // To insert data into the applicant table
    }
}
