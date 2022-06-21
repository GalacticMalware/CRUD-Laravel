<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public $name;
    public $lastname;
    public $lastname2;
    public $title = "hola";

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    { 
        $this->title = "hola";
        return view('home');
    }
}
