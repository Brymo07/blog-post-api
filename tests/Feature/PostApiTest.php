<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_post()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->postJson('/api/posts', [
            'title' => 'Test Post',
            'content' => 'This is a test post.',
        ]);

        $response->assertStatus(201)
                 ->assertJsonStructure([
                     'id', 'title', 'content', 'user_id', 'created_at', 'updated_at'
                 ]);
    }

    // Add more tests for other endpoints
}
