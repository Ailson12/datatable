<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('datatable.users.index', compact('users'));
    }

    public function create()
    {
        return view('datatable.users.create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::find($id);
        if ($user != null) {
            return view('datatable.users.create', compact('user'));
        }

        return back();
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user != null) {
            $user->update($request->all());
            return redirect()->route('users.index');
        }

        return back();
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user != null) {
            $user->delete();
            return back();
        }

        return back();
    }
}
