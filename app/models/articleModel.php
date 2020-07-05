<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class articleModel{

    public static function add_data($data){
        unset($data["_token"]);
        $artikel_add = DB::table('article')->insert($data);
        return $artikel_add;

    }

    public static function get_all(){
        $artikel = DB::table('article')->get();
        return $artikel;

    }

    public static function find_id($id){
        //unset($data["_token"]);
        $detailArtikel = DB::table('article')->where('id', $id)->get();
        //dd($jawaban_new);
        return $detailArtikel;

    }

    public static function update($data,$id){
        //unset($data["_token"]);
        $updateData = DB::table('article')->where('id', $id)->update($data);
        //dd($updateData);
        return $updateData;

    }
    
}