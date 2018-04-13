<?php

namespace Tests\Feature;

use App\Thread;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadsTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();

        $this->thread = Thread::inRandomOrder()->first();
    }

    public function test_a_user_can_view_all_threads()
    {
        

        $response = $this->get('/threads');

        $response->assertStatus(200);
    }

    public function test_a_user_can_read_a_single_thread()
    {

        $response = $this->get('/threads/' . $this->thread->id);

        $response->assertSee($this->thread->title);
        
    }
}
