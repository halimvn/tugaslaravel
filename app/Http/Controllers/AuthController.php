<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index(){
        return view('register');
    }

    public function post(Request $request){
        $data = $request->all();

        $nama = $data["firstname"];
        $last = $data["lastname"];
        
        $fullname= $nama . ' ' . $last;
        return view('welcome',['fullname'=>$fullname]);

    
}
}