<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catgory;
use App\SubCatgory;
use Carbon\Carbon;

class subCatgoryControllwr extends Controller
{
    function addsubcatgory(){
        $catgris= catgory::orderBy('catgorie_name','asc')->get();
        return view('admin.subcatgory.subcatgory_add',compact('catgris'));
    }
    function postsubcatgory(Request $request){
        $request->validate([
            'subcatgory_name'=>'required',
            'catgory_id'=>'required',
        ]);

        SubCatgory::insert([
            'subcatgory_name'=>$request->subcatgory_name,
            'catgory_id'=>$request->catgory_id,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('succes','your subcatgory add succesfully');
    }

    function listsubcatgory(){
        $sub_catgories = SubCatgory::paginate(2);
        return view('admin.subcatgory.index',compact('sub_catgories'));
    }


}
