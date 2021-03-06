<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mokytojai;
class MokytojaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mokytojai = Mokytojai::orderBy('id','asc')->paginate(10);
        return view ('pages.guitarists')->with('mokytojai', $mokytojai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guitarists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'vardas'    =>  'required',
            'pavarde'    =>  'required'
        ]);

        $post = $request->all();

        Mokytojai::create($post);

        return redirect('/guitarists/create')->with('status', 'Klausimas issiustas!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Mokytojai::find($id);
        $post->delete();
        return redirect('/guitarists')->with('status', 'Registracija panaikinta!');
    }
}
