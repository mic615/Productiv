<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TasksTest extends TestCase
{

   use WithFaker, RefreshDatabase;


    /** @test */

    public function a_user_can_create_a_task()
    {
        $this->withoutExceptionHandling();
        $attributes=[
          'title'=> $this->faker->sentence,
          'category' => $this->faker->sentence,
          'description' => $this->faker->paragraph,

        ];

        $this->post('/tasks', $attributes)->assertRedirect('/tasks');

        $this->assertDatabaseHas('tasks', $attributes);

        $this->get('/tasks')->assertSee($attributes['title']);
    }
}
