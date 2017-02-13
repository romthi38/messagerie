<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    public function getHome() {
        $data = array('page_title' => 'Accueil');

        return view('front.pages.home',$data);
    }

    public function contactsList() {
        $users = User::get()->orderBy('name');

        return view('front.pages.contacts_list',['users' => $users]);
    }

    public function conversationsList() {

    }
}
