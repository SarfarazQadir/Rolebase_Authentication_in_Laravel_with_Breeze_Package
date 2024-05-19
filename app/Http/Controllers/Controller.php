<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){
        $role = auth()->user()->admin;
        if ($role == 1) {
            return view('admin.admindashboard');
        }
        else{
            return view('User.userdashboard');
        }
        return view('home');
    }
}
