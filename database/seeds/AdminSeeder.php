<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                array(
                    'email'         => env('EMAIL_1'),
                    'name'          => env('NAME_1'),
                    'password'      => Hash::make(env('PASSWORD_1')),
                    'role'          => env('ROLE_1'),
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s')
                ),
                array(
                    'email'         => env('EMAIL_2'),
                    'name'          => env('NAME_2'),
                    'password'      => Hash::make(env('PASSWORD_2')),
                    'role'          => env('ROLE_2'),
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s')
                ),
            )
        );
    }
}
