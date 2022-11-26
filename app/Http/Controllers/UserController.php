<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;


class UserController extends Controller
{
    public function index() 
    {
        return Inertia::render('User/index', [
            'users' => User::all()
        ]);
    }
    public function create()
    {
        return Inertia::render('User/Create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:50'],
            'password' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email'],
        ]);

        if($request->avatar){
            $file_name = $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->storeAs('public', $file_name);
            $validated['avatar_file_path'] = '/storage/'.$file_name;
        }

        User::create($validated);
        return redirect()->route('user.index');
    }
}
