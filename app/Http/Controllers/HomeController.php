<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function member(){
        $toanbothanhvien = User::all();
        return view('member',["thanhvien" => $toanbothanhvien]);
    }
    public function deletNember($id){
        User::destroy($id);
        return redirect('/toanbothanhvien');
    }
}
