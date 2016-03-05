<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			 'dob' => 'required',
			'password' => 'required|confirmed|min:6',
			'phone' => 'required|max:15',
			'country' => 'required',
			'city' => 'required',
			'address' => 'required',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'dob' => $data['dob'],
			'password' => bcrypt($data['password']),
			 'phone' => $data['phone'],
			 'country' => $data['country'],
			 'city' => $data['city'],
			 'address' => $data['address'],
		]);
	}

}
