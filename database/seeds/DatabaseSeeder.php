<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'username'=>'admin',          // 帳號
        'password'=>bcrypt('admin'),  // 密碼
    ]);
        DB::table('website')->insert([
        'title'=>'coffee shop',
        'subtitle'=>'coffee shop',
        'footer'=>'ok',
    ]);
    }
}
