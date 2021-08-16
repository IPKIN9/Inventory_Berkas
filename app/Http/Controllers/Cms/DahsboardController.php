<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DahsboardController extends Controller
{
    public function index()
    {
        return view('Cms.Home');
    }
}
