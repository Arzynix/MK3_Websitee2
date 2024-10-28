<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function about(){
        $data = [
            'name' => 'Aufa Arya Anaqi',
            'address' => 'Batam, Villa Muka Kuning',
            'email' => 'anaqi310508@gmail.com'
        ];
        return view('about', $data);
    }
}
