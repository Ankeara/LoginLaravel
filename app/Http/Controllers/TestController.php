<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
     // login
    public function registation()
    {
        return view('register');
    }

    // proccess register
    public function proccessRegistation(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|same:password_confirm',
            'password_confirm' => 'required',
        ]);

        // Check if the email already exists
        if (User::where('email', $request->email)->exists()) {
            return response()->json([
                'status' => false,
                'errors' => ['email' => ['This email is already registered.']],
            ]);
        }

        if($validator->passes())
        {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            session()->flash('success', "Your'e registered successfully.");

            return response()->json([
                'status' => true,
                'errors' => []
            ]);
        }else{
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ]);
        }
    }

     // authenticate login to dashboard
    public function authenticate(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->passes())
        {
          if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                return redirect()->route('dashboard')->with("success", "Welcome your'e login successfully.");
            }else{
                return redirect()->route('login')->with("error","Either Email/password is incorrect?");
            }
        }else{
            return redirect()->route('login')->withErrors($validator)->withInput($request->only('email'));
        }
    }


    // login
    public function login()
    {
        return view('login');
    }


        // Logout
          public function logout()
        {
            Auth::logout();
            return redirect()->route('login')->with('success','you are logout successfully');
        }
    public function dashboard()
    {
        return view("dashboard");
    }
}