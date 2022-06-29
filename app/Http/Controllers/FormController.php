<?php

namespace App\Http\Controllers;
use App\Models\Donor;

use Illuminate\Http\Request;

class FormController extends Controller
{
 function formview(){
     return view('form');
 }
 function add(Request $req)
{
    $req->validate([
     'name' => 'required',
     'email' => 'required',
     'mobilenumber'=>'required',
     'bloodgroup' => 'required',
     'lastdonation' => 'required',
    ]);

    $donr  = new Donor;
    $donr->name = $req->name;
    $donr->email = $req->email;
    $donr->mobilenumber = $req->mobilenumber;
    $donr->bloodgroup = $req->bloodgroup;
    $donr->lastdonation = $req->lastdonation;
    $member = $donr->save();
      if($member){
          return back()->with('congrats', 'you added a member succesfully');
      }
      else{
          return back()->with('sorry','something went wrong');
      }

}

function show($id){
    $data = Donor::find($id);
    return view('edit',['data'=>$data]);
}

function update(Request $req){
    $data = Donor::find($req->id);
    $data->name = $req->name;
    $data->email = $req->email;
    $data->mobilenumber = $req->mobilenumber;
    $data->bloodgroup= $req->bloodgroup;
    $data->lastdonation = $req->lastdonation;
    $data->save();
    return redirect('crud');
}


    
}