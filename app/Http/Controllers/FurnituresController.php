<?php

namespace App\Http\Controllers;

use App\Models\Furnitures;
use App\Http\Requests\StoreFurnituresRequest;
use App\Http\Requests\UpdateFurnituresRequest;
use Illuminate\Http\Request;


class FurnituresController extends Controller
{

    public function index_form(){
        return view("auth.form_login",[
        'title' => 'form login']);
        
    }
    
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $furnitures = Furnitures::all();
        // dd($furnitures);

        return view("table", [
            'furnitures' => $furnitures,
            'title' => 'data barang'

        ]);
    }

    public function create_page(){
        return view("create_barang", [
            'title' => 'create product pages'
        ]);
    }
    
    public function update_page(Request $request, string $id){

        $furniture = Furnitures::find($id);
        return view("update_barang", [
            'furniture' => $furniture,
            'title' => 'update barang page'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request -> validate([
            'nm_barang'=>'required',
            'hrg_barang'=>'required|numeric',
            'qty'=>'required|integer',
            
        ]);

        Furnitures::create([
            'nm_barang'=>$validated['nm_barang'],
            'hrg_barang'=>$validated['hrg_barang'],
            'qty'=>$validated['qty'],

        ]);
        return redirect('table')->with('succes', 'produk berhasil ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nm_barang' => 'required',
            'hrg_barang' => 'required',
            'qty' => 'required'

        ]);

        Furnitures::where('id', $id)->update([
            'nm_barang' => $validated ['nm_barang'],
            'hrg_barang' => $validated ['hrg_barang'],
            'qty' => $validated['qty']

        ]);
        return redirect('table')->with ('success', 'udpate succesfull');
    }

        public function delete(Request $request){
            Furnitures::where('id', $request->id)->delete();
            return redirect('/table')->with('succes', 'produk deleted' );
        }
    /**
     * Display the specified resource.
     */
    public function show(Furnitures $furnitures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Furnitures $furnitures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Furnitures $furnitures)
    {
        //
    }
}
