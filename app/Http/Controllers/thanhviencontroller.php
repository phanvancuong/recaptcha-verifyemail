<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\thanhvienrequest;
class thanhviencontroller extends Controller
{
    public function getlogin() {
    	return view('auth.register');

    }
    public function postlogin(thanhvienrequest $request) {

    }
}
