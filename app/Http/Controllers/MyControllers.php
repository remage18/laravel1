<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class MyControllers extends Controller
{
    public function naming1() {
        $Name = request('Name', '');
        return view('route1', ['Name' => $Name]);
    }

    public function naming2_index() {
        return view('route2');
    }

    public function naming2_redirect() {
        $Name =  request('Name', '');
        return view('route2', ['Name' => $Name]);
    }

    public function naming3_index($Name=NULL) {
        return view('route3', ['Name' => $Name]);
    }

    public function naming3_redirect() {
        $Name =  request('Name', '');
        return Redirect::to('route3/'.$Name);
    }

    public function naming4(){
        $text = ['It', 'is', 'some', 'text'];
        return view('route4', compact($text));
    }
}
