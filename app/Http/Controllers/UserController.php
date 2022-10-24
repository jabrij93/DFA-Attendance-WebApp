<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $id =  Auth::user()->id;
        $info = User::where('id', $id)->first();

        return view('profile', compact('info'));
    }

    // public function create()
    // {
    //     return view('staffrecord.create');
    // }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/')->with('success', 'Your account has been created.');
        }

        return redirect('/profile')->with('errors', 'Authentication failed.');
    }

    public function show($id)
    {
        $profil = User::findOrFail($id);

        return view('staffrecord.edit', compact('profil'));
    }

    public function edit()
    {
        $id = Auth::user()->id;
        $profil = Profile::findOrFail($id);
        return view('staffrecord.edit', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->staff_id = $request->staff_id;
        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phonenumber = $request->phonenumber;
        $data->department = $request->department;

        $data->save();

        return redirect('/');
    }
}
