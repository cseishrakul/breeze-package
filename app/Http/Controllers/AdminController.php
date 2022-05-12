<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){
      return view('admin.admin_login');
    }

    public function login(Request $request){
      $data = $request->all();
      if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
        return redirect()->route('admin.dashboard');
      }else{
        return back();
      }
    }

    public function dashboard(){
      return view('admin.index');
    }

    public function logout(){
      Auth::guard('admin')->logout();
      return redirect()->route('login_form');
    }

    public function registration(){
      return view('admin.admin_register');
    }

    public function register(Request $request){
      Admin::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'created_at'=> Carbon::now()
      ]);

      return redirect()->route('login_form');
    }
}
