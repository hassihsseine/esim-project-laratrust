<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:super_admin']);
    }// end of construct

    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    } //end of index

    public function edit(User $user){
        return view('users.edit', compact('user'));
    }//end of edit

    public function update(Request $request, User $user){

        $this->validate($request, [
           'name'  => 'required',
           'roles' => 'required|array|min:1',
        ]);

        $request_data = $request->except('email');
        $user->update();
        $user->syncRoles($request->roles);

        return redirect()->route('users.index');
    }//end of update
}//end of user controller
