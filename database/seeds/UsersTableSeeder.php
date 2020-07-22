<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 1,
                'email' => 'baba@gmail.com',
                'password' => 'password',
                "role" => 1,
                "status" => 1,
                "created_at"=>now(),
                "updated_at"=>now()
            ],

        ];
        DB::table('users')->insert($data);
    }
}
