<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function home(): string
    {
        return "Welcome to my page";
    }
}
