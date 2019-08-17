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
    	/**
    	 * Description: Thực hiện chạy insert data vào bảng users
    	 * Creat By: LHPhong (16/08/2019)
    	 * RunCommand: php artisan db:seed 
    	 * Note : Ngoài ra có thể use factory : factory(App\User::class, 50)->create()
    	 */
          DB::table('users')->insert([
        	'name' => 'phong',
        	'email' => 'lehongphong1997@gmail.com',
        	'password' => bcrypt('123456'),
        	'remember_token' => str_random(10), 
        ]);

          
    }
}
