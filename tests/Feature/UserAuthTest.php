<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserAuthTest extends TestCase
{
    use RefreshDatabase; // Resets the database for each test
    /**
     * Test for user login.
     */
    // public function test_user_can_login()
    // {
    //     // User::create([
    //     //     'name'=>'testmember',
    //     //     'role'=>'member',
    //     //     'email' => 'testmember@example.com',
    //     //     'password' => bcrypt('password'),
    //     // ]);

    //     $user = User::factory()->create([
    //         'name' => 'testmember',
    //         'role' => 'member',
    //         'email' => 'testmember@example.com',
    //         'password' => bcrypt('password'),
    //     ]);

    //     $response = $this->post('/login', [
    //         'email' => 'testmember@example.com',
    //         'password' => 'password',
    //     ]);
    //     // $response->assertRedirect('/docs');
    //     $this->assertAuthenticatedAs($user);
    // }

    // public function test_user_can_logout()
    // {
    //     $user = User::factory()->create();

    //     $this->actingAs($user);

    //     $response = $this->post('/logout');

    //     $response->assertRedirect('/');
    //     $this->assertGuest();
    // }
}
