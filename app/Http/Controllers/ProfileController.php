<?php namespace App\Http\Controllers;

use DB;
use Auth;

class ProfileController extends Controller {



	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$count = array();
		$count[0] = DB::table('users')->count();
		$count[1] = DB::table('users')->where('country',Auth::user()->country)->count();
     	return view('profile',['counts' => $count]);
		
	}

	public function show($id)
	{
	}

	public function edit()
	{
	}

	public function destroy($id)
	{
	}

	public function update()
	{  
	}
}
