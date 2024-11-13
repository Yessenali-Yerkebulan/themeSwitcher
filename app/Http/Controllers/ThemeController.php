<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function home()
    {
        return view('themes.' . session('theme', 'classic') . '.home');
    }

    public function contacts()
    {
        return view('themes.' . session('theme', 'classic') . '.contacts');
    }

    public function setTheme(Request $request)
    {
        $request->validate([
            'theme' => 'required|in:classic,cuba',
        ]);

        session(['theme' => $request->theme]);
        return redirect()->route('home');
    }
}
