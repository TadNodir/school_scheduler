<?php

namespace App\Http\Controllers;

use App\Models\User;

class SchoolController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('school.dashboard', [
            'user' => $user
        ]);
    }
}
