<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_taskCreate()
    {
        // Creating 1 task and 1 user to associate with that task

        $task = Task::factory()->create();
        $task->description = "Buy groceries";
        $task->save();

        // $user = $task->user;

        $user = User::find(1);
        $user->name = "Samantha Tolentino";
        $user->save();
        $this->assertEquals("Samantha Tolentino", $user->name);
        $tasks = $user->tasks;

        // $task = $tasks;
    }
}
