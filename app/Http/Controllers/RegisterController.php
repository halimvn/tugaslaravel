<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

        public function index(){
            return view('register');
        }

        public function post(Request $request){

            $nama = $request["nama"];
           // return view('home');
        }
        
    //
}
