<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function getProfil(User $user) {
        $data = array('page_title' => 'Profil de '.$user->name, 'user' => $user);
        return view('front.pages.user_profil',$data);
    }
}
