<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class siaController extends Controller
{
    public function create(){
        return view('sia.create') ;
    }

    public function store(Request $request){
        $carrera = new Carrera();

        $carrera->name = $request->name;
        $carrera->facultad = $request->email;
        $carrera->description = bycript($request->password);
        $carrera->avatar = $request->avatar;

        return $carrera;
        
    }

    public function index($id){
        $user = User::where('id','LIKE',"%{$id}%")->select('name')->first();
        return view('sia.index', ['nick'=> $user->name]);
    }

    public function show($nick, $materia=null){
        if ($materia){
            return view('sia.showmat',['nick'=> $nick, 'materia'=> $materia]);
        }
        else{
        return view('sia.show', ['nick'=> $nick]);
        }
    }

}
