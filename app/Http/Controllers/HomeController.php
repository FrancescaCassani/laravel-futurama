<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index() {
        $data = config('futurama');

        return view('homepage', compact('data'));
    }
}
