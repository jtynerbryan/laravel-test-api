<?php

use App\Post;
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
        factory(App\User::class, 50)->create()->each(function ($u) {
            $u->posts()->save(factory(Post::class)->make());
        });
    }
}
