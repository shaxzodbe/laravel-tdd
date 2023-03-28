<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_guests_redirected_to_login_page(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('login');
        $response->assertStatus(200);
    }

}
