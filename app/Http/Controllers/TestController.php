<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test(){
        $result = [1, 2, 3, 4];
        return $result;
    }
}
