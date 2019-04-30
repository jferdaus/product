<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth ;
use App\User;

class CustomLoginController extends Controller
{
    


public function login(Request $request)

{



if (Auth::attempt([

'email' => $request->email,
'password'=> $request->password,


]))


{

$user = User:: where('email', $request->email)->first();


if ($user->user_level() == "user")


{


return view('user.home.homeContent');

}



if ($user->user_level() == "supplier")


{


return view('supplier.home.homeContent');

}









}


return redirect()->back();



}









}
