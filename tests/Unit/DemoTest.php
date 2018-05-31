<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\DemoTestController as DTC;

class DemoTest extends TestCase
{
    public function testSuperDemo()
    {
        $result = new DTC();
        $this->assertArrayHasKey("fourth", ['fourt1h']);
    }
}
