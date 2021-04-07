<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_examplePost()
    {
        $post = Post::factory()->create();
        $post->title = "Hello IS373";
        $post->save();

        $user = User::find(1);
        $user->name = "Samantha Tolentino";
        $user->save();

        $this->assertEquals("Samantha Tolentino", $user->name);
        $posts = $user->posts;
    }
}
