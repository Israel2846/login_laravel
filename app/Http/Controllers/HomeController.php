<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // $username = Auth::user()->name ?? Auth::user()->username;
        // return view('home.index', compact('username'));
        // return view('home.index', ['username' => $username]);
        return view('home.index');
    }
}
