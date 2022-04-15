<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller {
    public function index() {
        return view('login');
    }
    public function login(Request $request) {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    }
    public function logout() {
    }
}
