<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoTestController extends Controller
{
    public function Demo(){
        $A = array("first", "second", "third");
        return $A;
    }
}
