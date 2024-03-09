<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FakultasResource;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    //
    public function index()
    {
        $fakultas = Fakultas::all();
        return new FakultasResource(true,'Data Found',$fakultas);
    }
}
