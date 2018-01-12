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
      $user = App\User::create([
          'name' => 'Abhishek Tiwari',
          'email' => 'abhishek@tiwari.com',
          'password' => bcrypt('password'),
          'admin' => 1
        ]);

        App\Profile::create([
          'user_id' => $user->id,
          'avatar' => 'uploads/avatar/default.png',
          'about' => 'jdbscfdsbvjbsd sdv vckhsdb  sdakhvsdv sd vsdsvk sdkv sdsjdvs',
          'facebook' => 'facebook.com',
          'youtube' => 'youtube.com'
        ]);
    }
}
