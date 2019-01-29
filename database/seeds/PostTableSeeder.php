<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 300)->create()->each(function(Post $post){

        	$post->tags()->attach([

        		rand(1,10),
        		rand(11,20),
        		rand(21,30),
        		rand(31,40),
        		rand(41,50),

        	]);

        });
    }
}
