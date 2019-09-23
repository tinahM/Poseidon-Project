<?php
	
	namespace app\Http\Contollers;

	use Illuminate\Http\Request;

	class LoginController extends Controller
	{
		public function login(Request $request){
			dd($request->all());

			if(Auth::attempt($user_data))
    	{
			return redirect ->('home');
    	}
    	else
    	{

			return back()->with('error','Wrong login details');

    	}

			]}
	}

