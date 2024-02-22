<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($id, $name)
    {
        $activeNavItem = 'profile';
        return view('user.show', ['id' => $id, 'name' => $name,], compact('activeNavItem'));
    }
}
