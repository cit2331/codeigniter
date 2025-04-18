<?php

namespace App\Controllers;

class Home
{
    public function index(): string
    {
        return view('admin/index');
    }
}
