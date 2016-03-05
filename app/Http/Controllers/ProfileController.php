<?php namespace App\Http\Controllers;
use Auth;
use DB;
use Input;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
	{
		$count = array();
		$count[0] = DB::table('users')->count();
		$count[1] = DB::table('users')->where('country',Auth::user()->country)->count();
     	return view('profile',['counts' => $count]);
	}

	public function show($id)
	{

		$allusers = DB::table('users')->select(array('name', 'email', 'country'))->get();
		return view('showUsers', ['allprofiles' => $allusers]);
	}


	public function edit()
	{

		return view('edit'); // Redirecting to the edit page to show the form for editing current user

	}

	public function destroy($id)
	{

			DB::table('users')->where('email', $id)->delete();
			Auth::logout();
			return Redirect('profile');
         
	}

	public function update()
	{        

		$rules = array(
            'name' => 'required|max:255',
			'phone' => 'required|max:15',
			 'dob' => 'required',
			'country' => 'required',
			'city' => 'required',
			'address' => 'required',   
        ); // Validations on the data sent through Edit Form

        $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
            	return view('edit');
      		  } 

      		else {
          		DB::table('users')
                ->where('email', Auth::user()->email)
                ->update(array( 'password' => Auth::user()->password,
               	'country' => Input::get('country'),
               	'city' => Input::get('city'),
               	'phone' => Input::get('phone'),
               	'address' => Input::get('address'),
               	'dob' => Input::get('dob'),
               	'name' => Input::get('name')
               	)); // Saving the Changes to profile

               	return Redirect('profile');
        	  }

	}

	// New method created to help browsing through all the profiles

	public function browUser($id)
	{

		$browseduser = DB::table('users')->where('email', $id)->first();
		return view('browse', ['curruser' => $browseduser]);
		
	} 
}
