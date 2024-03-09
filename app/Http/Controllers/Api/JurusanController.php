<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\JurusanResource;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    //
    public function index()
    {
        $jurusan = Jurusan::all();

        return new JurusanResource(true,'Data Found',$jurusan);
    }

    public function show($fk_id)
    {
        $jurusan  = Jurusan::where('fakultas_id',$fk_id)->get();
        if ($jurusan){
            return new JurusanResource(true,"Show Data Success",$jurusan);
        }else{
            return new JurusanResource(false,"Not Found Data",null);
        }
    }
}
