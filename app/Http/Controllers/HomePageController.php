<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function __invoke()
    {
        return "Hello Farjana Hasan";
    }
}
