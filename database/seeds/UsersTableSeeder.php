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
        // Insert Simple
        /*DB::table('users')->insert([
            'name' => 'Hugo',
            'email' => 'vaporic@gmail.com'
        ]);*/

        \PlatziPHP\User::truncate();
        \PlatziPHP\Post::truncate();

        factory(PlatziPHP\User::class, 10)->create()->each(function($user){
            $post = factory(PlatziPHP\Post::class)->make();
            $user->posts()->save($post);
        });
    }
}
