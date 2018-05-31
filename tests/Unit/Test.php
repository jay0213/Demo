<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\TestController as TC;

class Test extends TestCase
{

    public function test()
    {
        $A = new TC;
        $this->assertCount(4, $A->Test());
    }
}
