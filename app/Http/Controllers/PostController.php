<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=posts::all();
        return view('tampilpost',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahpost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cek=$request->validate([
            'nama'=>'required',
            'postingan'=>'required|string'
        ]);
        posts::create($cek);
        return redirect('post')->with('success','berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=posts::find($id);
        return view('editpost',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cek=$request->validate([
            'nama'=>'required',
            'postingan'=>'required|string'
        ]);
        posts::find($id)->update($cek);
        return redirect('post')->with('success','berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        posts::find($id)->delete($id);
        return redirect('post')->with('success','Berhasil dihapus');
    }
}
