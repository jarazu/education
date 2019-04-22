<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();


class AdminController extends Controller
{
    // view profile part 
    public function viewprofile(){
        return view('admin.view');
    }   
    
    // setting part 
    public function setting(){
        return view('admin.setting');
    }
    
    public function admin_dashboard(){
        return view('admin.view');
    }
    // logout
    public function logout(){
        Session::put('admin_email', null);
        Session::put('admin_id', null);
        return Redirect::to('/backend');
    }

    //login
    public function login_dashboard(Request $request){
        $email = $request->admin_email;
        $password = md5($request->admin_password);
        $result = DB::table('admin_tbl')
        -> where('admin_email',$email)
        -> where('admin_password',$password)
        ->first();
        // echo "</pre>";
        // print_r($result);

        if($result){
            Session::put('admin_email', $result->admin_email);
            Session::put('admin_id', $result->admin_id);
           return Redirect::to('/admin_dashboard');
           
         //echo "wellcome";
        }else{
            
            // Session::put('exception', 'Invalid Login Information');
            return Redirect::to('/backend');
        }

       // return view('admin.dashboard');
    }
}
