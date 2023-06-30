<?php

namespace Tests\Feature;

use App\Models\Environment;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvEnvironmentsMiddlewareTest extends TestCase
{
    // /**
    //  * A basic feature test example.
    //  */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    // function test_check_environment()
    // {
    //     // $this->assertNotNull(env_environments());
    //     Environment::create([
    //         'name' => 'test',
    //         'desc' => 'test',
    //         'available' => 'member', 'logo' => '-'
    //     ]);
    //     if (env_environments() != null) {
    //         # code...
    //         $this->assertNotNull(env_environments());
    //     } else {
    //         $this->assertNull(env_environments());
    //     }
    // }
    // function test_users_check()
    // {
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
    //     $this->actingAs($user);
    //     $this->assertEquals('testmember', auth()->user()->name);
    // }
    // function test_check_email()
    // { // Create a user with ID 1 using a factory
    //     $user = User::factory()->create(['id' => 1]);

    //     // Authenticate the user
    //     $this->actingAs($user);

    //     // Retrieve the user from the model
    //     $retrievedUser = User::find(1);

    //     // Assert that the retrieved user matches the authenticated user
    //     $this->assertEquals(1, $retrievedUser->id);
    //     $this->assertEquals('testmember', $retrievedUser->name);
    //     // Add other assertions for user attributes you want to test
    // }
}
