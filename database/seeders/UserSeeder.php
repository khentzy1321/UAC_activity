<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'lname' => 'Abarquez',
                'fname' => 'Kent Jai',
                'username' => 'khenkie',
                'password' => bcrypt('helpme'),
                'email' => 'khenkie@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'genita',
                'fname' => 'louei',
                'username' => 'chouei',
                'password' => bcrypt('helloworld'),
                'email' => 'louei@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Benablo',
                'fname' => 'MarkDwin',
                'username' => 'ayseefrag',
                'password' => bcrypt('lodsikie'),
                'email' => 'benablo@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Coscos',
                'fname' => 'John Ritchie',
                'username' => 'jeliclecats',
                'password' => bcrypt('coscos1223'),
                'email' => 'coscos@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
