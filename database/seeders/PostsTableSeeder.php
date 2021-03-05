<?php

namespace Database\Seeders;
use app\Models\Post;
use app\Models\Comment;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 50)
            ->create()
            ->each(function ($post) {
                $comments = factory(App\Models\Comment::class, 2)->make();
                $post->comments()->saveMany($comments);
            });
    }
}