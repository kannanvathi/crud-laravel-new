<?php

namespace App\Http\Controllers;

use App\credential;
use App\crud_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use MongoDB\Driver\Session;

class credentialController extends Controller
{
    function register(Request $req){
        $credential = new credential();
        $credential->name = $req->name;
        $credential->email = $req->email;
        $credential->password = Crypt::encrypt($req->password);
        $credential->save();
        $req->session()->flash('success', 'Register successful');
        $req->session()->put('user', $req->name);
        return redirect('register');

    }
    function login(Request $req){
        $userData = credential::where('email', $req->email)->get();
        if($req->password == Crypt::decrypt($userData[0]->password)){
            $req->session()->put('user', $userData[0]->name);
            return redirect('');
        }
    }
    function logout(Request $req){
        $req->session()->forget('user');
        return redirect('login');
    }

}
