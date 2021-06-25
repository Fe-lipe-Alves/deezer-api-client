<?php

namespace App\Http\Controllers;


use App\Facades\Deezer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = Deezer::user('1451851466');
        return view('home', compact('user'));
    }
}
