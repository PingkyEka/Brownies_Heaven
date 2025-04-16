<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index(): string         
    {
        return view('/pages/index');
    }

    public function about_us()
    {
        return view('/pages/about_us');
    }

    public function contact()
    {
        return view('/pages/contact');
    }

    public function product()
    {
        return view('/pages/product');
    }
}