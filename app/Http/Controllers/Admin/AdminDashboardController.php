<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\LogActivity;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
Use Mail;

class AdminDashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function store(Request $request){
        $this->validateUser();
        $randomPassword = $this->generatePassword(6);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($randomPassword);
        $user->role_id = $request->role;
//        $user->save();

//        $this->sendEmail($user->name, $user->email, $randomPassword);
        return redirect()->route('admin.dashboard');

    }

    public function validateUser(){
        return request()->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
        ]);
    }

    public function generatePassword($n){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomPass = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomPass .= $characters[$index];
        }
        return $randomPass;
    }

    public function sendEmail($name,$email,$password){
        $to_name=$name;
        $to_email=$email;
//        dd($to_name, $to_email);
        $data=array("Name"=>$name,"pass"=>$password);
        Mail::send('admin.mailview',$data, function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject("Your credential");
        });
    }


}
