<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kobe extends Controller
{
    public function verify(Request $request){
        $user = $request -> input('user');
        $pass = $request -> input('pass');

        if ( $user == 'Rascon.Julio' && $pass == '6969'){
            $url = 'correct';
        } else {
           $url= 'fail';
        }
        return view ($url, [
            'user' => $request -> input('user')
        ]);
    }


    public function login(){
        return view('start');
    }
}
