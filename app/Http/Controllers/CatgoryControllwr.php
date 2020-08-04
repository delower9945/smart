<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catgory;
use Carbon\Carbon;

class CatgoryControllwr extends Controller
{
    function addcatgory(){

        return view('admin.catgory.catgory_add');
    }

    function postcatgory(Request $request){
        $request->validate([
            'catgorie_name'=>'required',
        ]);

        Catgory::insert([
            'catgorie_name'=>$request->catgorie_name,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('succes','your catgory add succesfully');
    }

    function listcatgory(){
        $catgories= Catgory::latest()->paginate(2);
        return view('admin.catgory.index',compact('catgories'));
    }

}
