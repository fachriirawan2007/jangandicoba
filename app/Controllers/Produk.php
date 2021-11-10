<?php

namespace App\Controllers;

class Produk extends BaseController
{
    public function index()
    {
        return view('produk_lokal');
    }

    public function display()
    {
        return view('produk/produk_display');
    }
    public function page()
    {
        echo view('header');
        echo view('content');
        echo view('footer');
    }
}
