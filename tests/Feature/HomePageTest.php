<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /** @test */
    public function home_page_displays_correctly()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}