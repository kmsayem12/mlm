<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
            [
                'name' => "admin",
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
            ]
        );

        $user_id = rand(1111111111,9999999999);
        DB::table('users')->insert([
            'user_id'=> $user_id,
            'name' => "user",
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('trees')->insert([
            'user_id'=> $user_id,
            'placement_id' => 0,
            'left_side' => 0,
            'right_side' => 0,
            'left_count' => 0,
            'right_count' => 0,
        ]);

        DB::table('incomes')->insert([
            'user_id'=> $user_id,
            'day_bal' => 0,
            'current_bal' => 0,
            'total_bal' => 0,
        ]);
    }
}
