<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quizM;

class quizController extends Controller
{
    //
    public function index(){

        return view("gh");
    }

 public function savequiz(Request $request){
if(quizM::create($request->all() )){
    echo'succesfully applied';
}else {
    echo'something went wrong';
}
    }
    public function userdata(){
    $data = quizM:: all();  


    return view('adminV', ['userda'=>$data]);
    }
}




