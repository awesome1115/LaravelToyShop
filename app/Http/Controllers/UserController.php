<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('userMana.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('userMana.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('userMana.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $name = $request->name;
        // $email = $request->email;
        // $name = $request->name;
        // $name = $request->name;
        $input = $request->except(['_token']);
        
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|max:255',
            'created_at' => 'required',
            'updated_at' => 'required'
        ]);

        $user = User::find($id);

        $user->name = $input["name"];
        $user->email = $input["email"];
        $user->created_at = $input["created_at"];
        $user->updated_at = $input["updated_at"];

        $user->save();

        return redirect()->route('userMana.edit', ['userMana' => $id])->with('message', 'User Data Changed Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('userMana.index')->with('message', 'User Data Deleted Successfully!');
    }
}
