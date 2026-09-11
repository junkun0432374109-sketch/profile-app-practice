<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => '山口淳一',
            'age' => 55,
            'hobbies' => ['プログラミング', '読書', '旅行', 'ドライブ']
        ];

        return view('profile', compact('profile'));
    }
}
