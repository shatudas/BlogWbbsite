<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;




class HomeController extends Controller
{
    
    public function index(){

    	if(Auth::id()){


    		$usertype = Auth()->User()->usertype;

    		if($usertype=='user'){
    			return view('dashboard');
    		}
    		else if($usertype=='admin'){
    			
    			return view('backend.admin.dashboard');

    		}else{
    			return redirect()->back();
    		}
    	}

    }

}
