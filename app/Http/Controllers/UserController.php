<?php
// app/Http/Controllers/UserController.php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function welcome()
    {
        return view('user.welcome');
    }
}
