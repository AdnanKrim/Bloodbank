<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class CrudController extends Controller
{
    function crudview(){
        $data = Donor::all();
        return view('mainlist',['members'=> $data]);
    }

    function detailing($id){
        $data = Donor::find($id);
        return view('detail',['member'=>$data]);
    }
    function delete($id){
        $data = Donor::find($id);
        $data->delete();
        return redirect('crud');
    }


}
