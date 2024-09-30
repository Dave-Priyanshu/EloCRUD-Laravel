<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::cursorPaginate(5);  //To get all the users data
        // $users = User::where('city','Trystanfort')->where('age','<',30)->get();
        
        // return $users;
        return view('home',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','alpha'],
            'email'=>['required','unique'],
            'age'=>['required','numeric'],
            'city'=>['required','alpha'],
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'age'=> $request->age,
            'city'=> $request->city,
        ]);

        return redirect()->route('user.index')->with('status','New User Added Successfully');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::find($id);
        return view('viewuser',compact('users'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $users = User::find($user->id);
        return view('updateuser',compact('users'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $request->validate([
            'name' => 'required|alpha',
            'email'=>'required',
            'age'=>'required|numeric',
            'city'=>'required|alpha',
        ]);


        $user = User::where('id',$id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'age'=> $request->age,
            'city'=> $request->city,
            ]);
            
            return redirect()->route('user.index')->with('status','User Details Updated Successfully');
            
        }
        
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(User $user)
        {
            $user = User::find($user->id)->delete();
            return redirect()->route('user.index')->with('status','User Details Deleted Successfully');
    }
}
