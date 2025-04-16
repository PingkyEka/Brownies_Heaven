<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function about_us(): string
    {
        return view('about_us');
    }

    public function contact()
    {
        echo view('contact');
    }

    public function product(): string
    {
        return view('product');
    }
}
