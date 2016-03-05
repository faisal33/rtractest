<?php namespace App\Http\Controllers;

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
		return view('profile');
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
