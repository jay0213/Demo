<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\DemoTestController as DTC;

class DemoTest extends TestCase
{
    public function testSuperDemo()
    {
        $res = new DTC();
        $this->assertArrayHasKey("first", $res->DemoTest());
    }
}
