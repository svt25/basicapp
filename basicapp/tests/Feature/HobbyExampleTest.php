<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Hobby;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HobbyExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_exampleHobby()
    {
        $hobbies = Hobby::factory()->count(5)->create();

        // Regular Update Example

        $hobby = Hobby::find(1);
        $hobby->description = "Exercising";
        $hobby->save();

        $hobby = Hobby::find(2);
        $hobby->description = "Drawing";
        $hobby->save();

        $hobby2 = Hobby::find(3);
        $hobby2->description = "Drawing";
        $hobby2->save();

        // Mass Update Example

        Hobby::where('description', 'Drawing')
            ->update(['description' => 'Reading']);

        // Retrieve First Model

        $first = Hobby::firstWhere('description', 'Reading');
        echo $first;

        $user = User::find(1);
        $user->name = "Samantha Tolentino";
        $user->save();
        $this->assertEquals("Samantha Tolentino", $user->name);
        $hobbies = $user->hobbies;
    }
}
