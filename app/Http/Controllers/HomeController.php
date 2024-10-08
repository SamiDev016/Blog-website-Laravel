<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id())
        {
            $userType = Auth::user()->role;

            if($userType == 'user')
            {
                return view('dashboard');
            }
            else if($userType == 'admin'){
                return view('admin.admin_home');
            }
            else{
                return redirect()->back();
            }
        }
    }

    public function post(){
        return view('post');
    }
}
