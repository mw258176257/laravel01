<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class HomeController extends Controller
{
    function index()
    {
        return view('admin/home');
    }
}
