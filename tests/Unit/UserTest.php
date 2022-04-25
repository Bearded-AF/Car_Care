<?php

namespace Tests\Unit;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_can_login()
    {
      $user = User::factory()->create([
          'password' => bcrypt($password = 'i-love-laravel'),
      ]);

      $response = $this->post('/login', [
          'email' => $user->email,
          'password' => $password,
      ]);

      $response->assertRedirect('/home');
      $this->assertAuthenticatedAs($user);
    }

    public function test_login_screen_can_be_accessed()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertViewIs('auth\login');
    }
}
