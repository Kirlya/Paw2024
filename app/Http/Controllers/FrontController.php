<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function nuevaRuta() {
        return view('nueva_vista');
        }
        
}
