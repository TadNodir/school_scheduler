<?php

namespace App\Http\Controllers;

use App\Models\User;

class UniController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('uni.dashboard', [
            'user' => $user
        ]);
    }

    public function subjects($user)
    {
        $user = User::findOrFail($user);
        if (isset($_GET['subNum'])) {

        $subNum = $_GET['subNum'];
        return view('uni.subjects', [
            'user' => $user,
            'subAmount' => $subNum
        ]);

        }
        return null;
    }

    public function time($user) {
        $user = User::findOrFail($user);

        return view('uni.time', [
            'user' => $user,
        ]);
    }
}
