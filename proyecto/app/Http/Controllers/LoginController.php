<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        $id = User::where('email', 'LIKE', "%{$request->email}%")->select('id')->first();
        return redirect()->route('sia.index', $id->id);
    } 

    public function login(Request $request){
        $datos = $request->validate([
            
            'email' =>['required', 'string', 'email'],
            'password' =>['required', 'string']
            
        ]);
        if(Auth::attempt($datos)){
            //login succes
            $email = $request->email;
            $user = User::where('email','LIKE',"%{$email}%")->select('id', 'name')->first();
            $id = $user->id;
            $nick = $user->name;
            $request->session()->regenerate();
            return redirect()->route('sia.index', $id);

        };
        //login fail
        
    } 

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('inicio');
    } 

    public function edit($id){
        $user = User::find($id);

        return view('edit',['user'=> $user]);
    } 
}
