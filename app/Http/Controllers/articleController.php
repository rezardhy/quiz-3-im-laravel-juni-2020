<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\articleModel;

class articleController extends Controller
{
    //
    public function create(){

        //dd($request->all());
        return view('layouts.newArticle');
    }

    public function add(Request $request){

        //dd($request->all());
        $new_data = articleModel::add_data($request->all());
        return redirect('/article');
    }

    public function index(){
        $data = articleModel::get_all();
        //dd($data);
        return view('layouts.index', compact('data'));
    }

    public function detail($id,Request $request){

        $data = articleModel::find_id($id);
        //dd($data);
        return view('layouts.detail', compact('data'));
    }

    public function edit($id){
        $data = articleModel::find_id($id);

        return view ('layouts.edit' ,compact('data'));
    }

    public function update($id,Request $request){
        $data = $request->all();
        unset($data["_token"]);
        unset($data["_method"]);
        //dd($data);
        $data = articleModel::update($data,$id);
        return  redirect('/article');
    }


}
