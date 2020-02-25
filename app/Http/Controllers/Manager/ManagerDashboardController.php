<?php

namespace App\Http\Controllers\Manager;

use App\LogActivity;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ManagerDashboardController extends Controller
{
    public function index(){
        return view('manager.dashboard');
    }
}
