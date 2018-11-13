<?php

namespace App\Http\Controllers\Auth;

use App\Http\Helpers\Api;
use App\Http\Helpers\RestCurl;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{ 

    public function index()
    {
        try {

            if (session()->get('user.Email') != NULL) {
                // echo(2);
                session()->flash('info','Hai, kamu masih mempunyai sesi login');
                return redirect('/home');
            } else {
                session()->flash('info','Silahkan login');
                return view('login');
            }

        } catch (Exception $e) {
            session()->flash('error','Terdapat kesalahan, silahkan coba lagi');
            return redirect('/login');
        }    
    }
    


    /**
    * @param email required
    * @param password required
    * @return json success login, your account its not active, email or password wrong
    */
    public function login(Request $request)
    {
        try {


            $param = array(
                'email' => $request->email,
                'password' => $request->password,
            );
            
            $login =  (object) RestCurl::exec('POST',env('URL_SERVICE_ACCOUNT').'/admin-auth/login',$param);
            // dd($login->data->message);
            if ($login->status == 200 ) {
                // success login
                $access_token = $login->data->data->access_token;
                $r =  (object) RestCurl::exec('GET',env('URL_SERVICE_ACCOUNT').'/admin-auth/check-token',[],$access_token);

                session([
                    'access_token'=>$access_token,
                    'user' => (array) $r->data->data
                ]);
                
                session()->flash('success','Hai, Selamat datang di halaman admin');
                return redirect('/home');
            } else {
                // 2 condition, account not active or password wrong
                session()->flash('error',@$login->data->message);
                return redirect('/login');

            }
        } catch (\Exception $e) {
            session()->flash('error','Terdapat kesalahan, silahkan coba lagi');
            return redirect('/login');
        }
    }

    public function logout()
    {
        try {
            $token  = session()->get('access_token');
            $r =  (object) RestCurl::exec('GET', env('URL_SERVICE_ACCOUNT').'/auth/logout',[],$token);
            // dd($r);

        } catch (\Exception $e) {
            return response()->json(Api::format('0',[],$e->getMessage()), 500);
        }

        session()->flush();
        return redirect('/login');
    }   
}
