<?php

namespace App\Http\Controllers;

use App\Models\ProfileModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facadees\DB;


class userController extends Controller

{ 
    
    public function index()
    {
        $profileModel = new ProfileModel();
        $db = $profileModel->alldata();
       
       
        // dd($db);
        
        return view('profile', compact('db'));
    }


    public function __construct()
    {
      $this->profileModel = new ProfileModel;
    }

    public function tambah()
    {
      return view('tambahuser');
    }
    
public function add(Request $request)
{
    //validasi data yang di inputkan oleh master data
    $this->validate($request,[
        'nama'=>'required|min:3|max:50',
        'harga'=>'required',
        'foto'        =>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ],[

        'nama.required'    =>"Nama harus di isi",
        'nama.min'         =>"Nama minimal 3 karakter",
        'nama.max'         =>"Nama maksimal 50 karakter",
        
        'foto.image'                =>"Foto harus berupa gambar",
        'foto.mimes'                =>"Format gambar hanya JPG, PNG, GIF, SVG",
        'foto.max'                  =>"Ukuran foto terlalu besar maksimal 2mb",
    ]);
    if ($request->file('foto')){
    #code
    $imgname = $request->nama.'.'. $request->foto->extension();
    $request->foto->move(public_path('gambar'),$imgname);
    }else{
        $imgname='default.png';
    }
    $user = new profileModel;
    $data = [
        'nama'=> $request->nama,
        'harga'=> $request->harga,
        'kategori'=>$request->kategori,
        'foto'=> $imgname,
    ];
    $user->addData($data);
    return redirect('/profile')->with('status','Tambah Data Berhasil !!!');
  }

public function detail($id)
{
  $user = $this->profileModel->find($id);
  return view ('detailuser',compact('user'));
}

public function detailedit($id)
{
  $user = $this->profileModel->find($id);
  return view ('edituser',compact('user'));
}

public function edit(Request $request, $id)
    {
        if($request->foto<>"")
        {
            $imgname = $request->nama.'.'.$request->foto->extension();
            $request->foto->move(public_path('img/'),$imgname);
            $data = [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'kategori'=> $request->kategori,
                'foto'=>$imgname,
            ];  
            $this->profileModel->editData($data,$id);
        }else{
            $data =[
                'nama'=> $request->nama,
                'harga'=> $request->harga,
            ];
            $this->profileModel->editData($data,$id);
        }
        return redirect('/profile')->with('status', 'edit barang berhasil');
    }
    public function hapus($id)
    {
        $this->profileModel->deleteData($id);
        return redirect('/profile')->with('status', 'delete pelanggan berhasil');
    }
    
}
