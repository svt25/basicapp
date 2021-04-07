<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        // Makes 3 fake users
        $users = User::factory()->count(3)->create();

        // Gets one user
        $user = User::find(1);

        // Sets name property

        $user->name = "KEITH";

        //dd($user);

        //$this->assertEquals(5, 5);
    }
}
