<?php

namespace Tests\Feature;

use App\Models\Environment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvEnvironmentsHelperTest extends TestCase
{
    // use RefreshDatabase;
    // /**
    //  * A basic feature test example.
    //  */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    // function test_helper_is_null()
    // {
    //     if (env_environments()) {
    //         # code...
    //         $this->assertNotNull(env_environments(), 'Environment helper is not null!');
    //     } else {
    //         $this->assertNull(env_environments(), 'Environment helper is null!');
    //     }
    // }

    // function test_helper_is_assert()
    // {
    //     // $env = Environment::find(1);
    //     Environment::create([
    //         'name' => 'test',
    //         'desc' => 'test',
    //         'available' => 'member', 'logo' => '-'
    //     ]);
    //     $env_ = env_environments();
    //     $this->assertInstanceOf(Environment::class, $env_, 'Instance available!');
    //     $this->assertEquals('member', env_environments()['available'], 'Environment helper has available of ' . env_environments()['available']);
    // }
}
