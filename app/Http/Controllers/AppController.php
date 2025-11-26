<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function welcome()
    {
        $todos = Todo::all();
        $users = User::all();
        
        return view('welcome', [
            'todos' => $todos,
            'users' => $users
        ]);
    }
} 