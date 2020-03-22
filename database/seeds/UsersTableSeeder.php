<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'name' => 'Roev Evgen',
                'email' => 'roevevgen7@gmail.com' ,
                'password' => bcrypt(Str::random(16)),
            ],
            [
                'name' => 'Author',
                'email' => 'roevevgen@gmail.com' ,
                'password' => bcrypt('panda123ira'),
            ],
        ];

        Db::table('users')->insert($data);
    }
}
