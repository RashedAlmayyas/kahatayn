<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\volunteer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //show register/create form
    public function create()
    {
        return view('volunteers.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //create new user 
    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'password' => 'required|confirmed|min:6'
            ]
        );

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);


        //create user
        $user = User::create($formFields);

        // /auto log
        auth()->login($user);

        return redirect('/');
        // ->with
        //     ('message', 'User created and logged in');

    }
//logout 

public function logout(Request $request){

    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
    // ->with('message','You have been logged out!');
    

}

public function login()
    {
       return view('volunteers.login');
    }
    


    public function authenticate(Request $request)
    {
       $formFields =  $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);
    if(auth()->attempt($formFields)){
        $request->session()->regenerate();

        return redirect('/');
    }
return back()->withErrors(
[
    'email'=> 'Invalid Credentials'
]
)->onlyInput('email');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(volunteer $volunteer)
    {
        //
    }
}