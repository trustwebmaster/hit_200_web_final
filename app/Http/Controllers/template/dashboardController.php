<?php

namespace App\Http\Controllers\template;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class dashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('template/index');
    }
}
