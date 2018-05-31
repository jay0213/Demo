<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoTestController extends Controller
{
    public function DemoTest(){
        $A = array("first", "second", "third");
        return $A;
    }
}
