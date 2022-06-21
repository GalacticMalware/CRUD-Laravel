<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class User extends Controller
{

    public function index()
    {
        $query = Users::orderBy('id', 'ASC')->get();
        $data = strlen($query) == 0 ? [] : $query;
        return view('user', compact('data'));
    }


    public function store(Request $request)
    {
        Users::create($request->all());
        return redirect('/');
    }

    public function update(Request $request,$id)
    {
        $user  = Users::findOrFail($id);
        $user->update($request->all());
        return redirect('/');
    }
}
