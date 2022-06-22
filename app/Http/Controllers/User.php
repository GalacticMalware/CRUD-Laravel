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

        $this->validate($request, [
            "NAME" => "required|max:99",
            "LAST_NAME" => "required|max:99",
            "LAST_NAME2" => "required|max:99"
        ]);
        Users::create($request->all());
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "NAME" => "required|max:99",
            "LAST_NAME" => "required|max:99",
            "LAST_NAME2" => "required|max:99"
        ]);
        
        $user  = Users::findOrFail($id);
        $user->update($request->all());
        return redirect('/');
    }
}
