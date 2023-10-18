<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\mdl_buku;

class ctrl_buku extends Controller
{
    //Function for programs
    public function getAll()
    {
        $query=mdl_buku::select('id','judul','pengarang');
        $query=$query->get();
        return view('tampil_buku',['buku' => $query]);
    }
    // Untuk menyimpan (mengirim) DATA
    public function simpan(Request $req)
    {
        mdl_buku::insert([
        'judul' => $req->judul,
        'pengarang'=> $req->pengarang
        ]);
        return redirect('/index-data');
    }
    // Untuk hapus DATA berdasarkan ID
	public function delete(Request $req)
    {
        mdl_buku::where('id',$req->id)->delete();
        return redirect('/index-data');
    }
    // Untuk select berdasarkan ID
    public function getById($id)
    {
        $query=mdl_buku::select('id','judul', 'pengarang');
        $query= $query->where('id', $id)->get();

        return view('edit_buku',['buku' => $query]);
    }
    // Untuk update nya
    public function update(Request $req)
    {
        mdl_buku::where('id' ,$req->id)->update([
            'judul' => $req->judul,
            'pengarang' => $req->pengarang
        ]);
        return redirect('/index-data');
    }

}

