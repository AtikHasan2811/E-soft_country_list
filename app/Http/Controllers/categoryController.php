<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;


class categoryController extends Controller
{

    public function index(){
        $data= category::latest()->paginate(2);
        return ['data'=>$data];
    }


    public function store(Request $request){
        $this->validate($request, [
            'cat_name' => 'required',
        ]);

        $data = new category();
        $data->cat_name = $request->cat_name;
        $data->save();
        return ['message'=>'ok'];

    }

    public function editCategory($id){
        $editData=category::find($id);
        return ['editData'=>$editData];

    }

    public function distroy($id){
        $data=category::find($id);
        $data->delete();
        return ['data'=>'ok atik'];
    }

    public function update(Request $request,$id){
        $updateData = category::find($id);
        $updateData->cat_name = $request->cat_name;
        $updateData->save();
    }






}
