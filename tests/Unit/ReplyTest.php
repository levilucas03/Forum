<?php

namespace Tests\Unit;

use App\Reply;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReplyTest extends TestCase
{
    function tests_it_has_an_owner()
    {
        $reply = Reply::inRandomOrder()->first();
        $this->assertInstanceOf('App\User', $reply->owner);
    }
}
