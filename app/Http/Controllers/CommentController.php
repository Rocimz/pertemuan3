<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=comment::all();
        return view('tampilkomentar',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahkomentar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator=$request->validate([
            'nama'=>'required',
            'komentar'=>'required|string'
        ]);
        comment::create($validator);
        return redirect('komentar')->with('success','berhasil ditambahkan');
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
        $data=comment::find($id);
        return view('editkomentar',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $cek=$request->validate([
            'nama'=>'required',
            'komentar'=>'required|string'
        ]);
        comment::find($id)->update($cek);
        return redirect('komentar')->with('success','berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        comment::find($id)->delete($id);
        return redirect('komentar')->with('success','Berhasil dihapus');
    }
}
