<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MahasiswaResource;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mhs_model = new Mahasiswa();

        $mahasiswa = $mhs_model->join('jurusan','jurusan.id','mahasiswa.prodi_id')
            ->join('fakultas','fakultas.id','mahasiswa.fakultas_id')
            ->get();

        return new MahasiswaResource(true, 'Data Found',$mahasiswa);
    }

    public function show($uuid)
    {
        $mahasiswa = Mahasiswa::where( 'uuid' , $uuid )
            
            ->first();
        if(!empty($mahasiswa)){
            return new MahasiswaResource(true,'Detail Data Found',$mahasiswa);
        }else{
            return new MahasiswaResource(false,"Data Not Found",null);
        } 
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama'=>'required|string',
            'nim'=>'required|unique:mahasiswa',
            'tanggal_lahir'=>'required|date',
            'prodi_id'=>'required|numeric',
            'fakultas_id'=>'required|numeric',
            'alamat'=>'required|string',
            'email'=>'required|email|unique:mahasiswa',
            'jenis_kelamin'=>'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }

        $mahasiswa = Mahasiswa::create([
            'mhs_id' => Str::uuid(),
            'nim'=>$request->nim,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'prodi_id' =>  $request->prodi_id,
            'fakultas_id' =>  $request->fakultas_id,
            'alamat' => $request->alamat,
            'email' => strtolower($request->email),
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return new MahasiswaResource(true, 'Data Berhasil Ditambahkan!',$mahasiswa);

    }



    public function destroy($uuid)
    {
        //mencari data berdasarkan uuid dan menghapus data tersebut
        $mahasiswa=Mahasiswa::where('mhs_id',$uuid)->first();
        if (!$mahasiswa) {
            return new MahasiswaResource(false,'Data Tidak Ditemukan',null);
        }else{
            $mahasiswa->delete();
            return new MahasiswaResource(true,'Data Berhasil Dihapus',null);
        }
    }

}
