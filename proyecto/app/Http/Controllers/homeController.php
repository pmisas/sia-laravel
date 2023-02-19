<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function __invoke(){

        $carreras = Carrera::paginate();


       return view('home', compact('carreras'));
    }
}
