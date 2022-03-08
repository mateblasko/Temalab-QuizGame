<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EditTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_reach_Edit_Quiz()
    {
        $response = $this->get('/Edit_Quiz');

        $response->assertStatus(200);
    }
}
