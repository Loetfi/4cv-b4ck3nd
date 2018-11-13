<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Api;
use App\Http\Helpers\RestCurl;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class DashboardController extends Controller
{ 


    public function index()
    {
        try {  

            if (session()->get('user.Email') != NULL) {
                return view('example');
            } else {
                session()->flash('info','Silakan login.');
                return redirect('/');
            }

        } catch (\Exception $e) {
                session()->flash('error','Terdapat kesalahan, silahkan coba lagi');
                return redirect('/');
        }
    } 
}
