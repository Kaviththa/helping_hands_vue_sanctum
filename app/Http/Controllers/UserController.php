<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\User;

class UserController extends Controller
{
    public function index(){

        
        
        return view('home');
    }
}
