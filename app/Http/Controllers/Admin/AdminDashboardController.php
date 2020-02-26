<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\LogActivity;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function store(Request $request){
        $this->validateUser();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($this->generatePassword(6));
        $user->role_id = $request->role;
//        dd($user);
        $user->save();
        return redirect()->route('admin.dashboard');

    }

    public function validateUser(){
        return request()->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'phone'=>'required|numeric|min:11',
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

    public function sendEmail(){

    }


}
