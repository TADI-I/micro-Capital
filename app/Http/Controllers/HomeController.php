<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\quizM;

class HomeController extends Controller
{
   public function index(){
$role= Auth::user()->role;
if($role == '0'){
return view('userv');

}
if($role == '1'){
//return view('adminv');
$data = quizM:: all();  


return view('adminV', ['userda'=>$data]);
}
else{
    return view('dashboard');
}

   } //
}
