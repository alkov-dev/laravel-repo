<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_returns_a_successful_response()
    {
        $body = [
            'email' => 'user1@gmail.com',
            'password' => '123456'
        ];

        $response = $this->post('/api/login', $body);

        $response->assertOk();
    }
}
