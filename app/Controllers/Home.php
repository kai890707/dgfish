<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function test()
    {
        $a = 4;
        $b = 2;
        $c = 3;
    }
}
