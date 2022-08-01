<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OneLiner;

class HomeController extends Controller
{
    public function index(){

        $one_liners = OneLiner::all();
        return view('app.index', \compact('one_liners'));
    }
}
