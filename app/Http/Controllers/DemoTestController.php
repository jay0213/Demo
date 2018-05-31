<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoTestController extends Controller
{
    public function DemoTest(){
        $arr = array("first" => "first","second" =>  "second","third"=> "third");
        return $arr;
    }
}
