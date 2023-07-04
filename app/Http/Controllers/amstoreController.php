<?php

namespace App\Http\Controllers;
use App\Models\amstore;
use Illuminate\Http\Request;

class amstoreController extends Controller
{
    public function index()
    {
        $amstores = amstore::orderBy('id','desc')->paginate(5);
        return view('amstores.index', compact('amstores'));
    }

    public function create()
    {
        return view('amstores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'barang' => 'required',
            'alamat' => 'required',
        ]);
        
        amstore::create($request->post());

        return redirect()->route('amstore.index')->with('success','Data sukses di buat.');
    }

    public function show(amstore $amstore)
    {
        return view('amstore.show',compact('amstore'));
    }

    public function edit(amstore $amstore)
    {
        return view('amstores.edit',compact('amstore'));
    }

    public function update(Request $request, amstore $amstore)
    {
        $request->validate([
            'nama' => 'required',
            'barang' => 'required',
            'alamat' => 'required',
        ]);
        
        $amstore->fill($request->post())->save();

        return redirect()->route('amstore.index')->with('success','Update sukses');
    }

    public function destroy(amstore $amstore)
    {
        $amstore->delete();
        return redirect()->route('amstore.index')->with('success','berhasil di hapus');
    }
}
