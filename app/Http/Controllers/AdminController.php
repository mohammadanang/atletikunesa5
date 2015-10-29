<?php

namespace App\Http\Controllers;

use App\Jobs\Admin\CreateUser;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\LoginRequest;
use App\Admin;
use Auth;
use Mail;

class AdminController extends Controller
{
	public function create()
	{
		return view('admin.registrasi.registrasi')->withTitle('Registrasi Admin');
	}

	public function doRegister(Request $request)
	{
		try {
			$this->dispatch(new CreateUser($request));
		} catch (\Exception $e) {
			return redirect()->back()->withErrors('Something wrong with your request');
		}

//		$data = [
//			'noi' => $input['noi'],
//			'name' => $input['name'],
//			'other' => $input['other'],
//			'code' => $input['activation_code']
//		];
//		$this->sendEmail($data, $input);
		return redirect()->route('index');
	}

	public function sendEmail($data, $input)
	{
		Mail::send('admin.emails.register', $data, function($message) use ($input) {
			$message->from('admin@atletikunesa5.site', 'Atletik-Unesa');
			$message->to($input['email'], $input['name'])->subject('Please verify your account registration!');
		});
	}

	public function activate($code, Admin $admin)
	{
		if ($admin->activateAccount($code)) {
			return 'Activated!';
		}
		return 'Fail';
	}
 
	public function login(LoginRequest $request)
	{
		$credentials = $request->only('email', 'password');
		if(Auth::attempt($credentials)){
			if (Auth::user()->active == 0) {
				Auth::logout();
				return 'Please activate your account';
			}
			else{
				return 'You have been log in';
			}
		}
		else{
			return 'The username and password do not match';
		}
	}
	
	public function logout()
 	{
 		Auth::logout();
    	return redirect()->route('index');
	}
}