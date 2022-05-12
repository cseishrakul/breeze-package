<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Auth;

class SellerController extends Controller
{
    public function index(){
      return view('seller.seller_login');
    }

    public function login(Request $request){
      $data = $request->all();
      if(Auth::guard('seller')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
        return redirect()->route('dashboard');
      }else{
        return back();
      }
    }

    public function dashboard(){
      return view('seller.index');
    }

    public function logout(){
      Auth::guard('seller')->logout();
      return redirect()->route('seller_login');
    }

    public function registration(){
      return view('seller.seller_register');
    }

    public function register(Request $req){
      Seller::insert([
        'name'=> $req->name,
        'email'=> $req->email,
        'password'=> Hash::make($req->password),
        'created_at'=>Carbon::now(),
      ]);

      return redirect()->route('seller_login');
    }
}
