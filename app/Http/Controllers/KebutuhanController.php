<?php

namespace App\Http\Controllers;

use App\Models\kebutuhan;
use Illuminate\Http\Request;

class KebutuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kebutuhan = Kebutuhan::all();
        return view('kebutuhan.index', compact('kebutuhan'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kebutuhan.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required',
        ]);


      Kebutuhan::create($validatedData);
      return redirect('kebutuhan')->with('success', 'New Post has been added');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function show(kebutuhan $kebutuhan)
    {
        $kebutuhan = Kebutuhan::findOrFail($id);
        return view('kebutuhan.show', compact('kebutuhan'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function edit(kebutuhan $kebutuhan)
    {
        return view('kebutuhan.edit', [
            'k' => $kebutuhan,
            'kebutuhan' => Kebutuhan::all()
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kebutuhan $kebutuhan)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required',
        ]);


        Kebutuhan::where('id', $kebutuhan->id)
        -> update($validatedData);
      return redirect('kebutuhan')->with('success', 'New Post has been added');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kebutuhan $kebutuhan)
    {
        Kebutuhan::destroy($kebutuhan->id);
        return redirect('kebutuhan')->with('success', 'Post has been deleted');
        //
    }
}
