<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->count(5)->create()->each(function($user){
            $thread = \App\Models\Thread::factory()->count(3)->make();
            $user->threads()->saveMany($thread);
        });
    }
}
