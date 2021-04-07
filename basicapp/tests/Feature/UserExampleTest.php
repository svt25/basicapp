<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_exampleUser()
    {
        // Makes fake user(s)

        $users = User::factory()->count(3)->create();

        // Gets one user

        $user = User::find(1);

        // Sets name property

        $user->name= "Samantha Tolentino";

        // Saves the user

        $user->save();

        $this->assertEquals("Samantha Tolentino", $user->name);
    }
}
