<?php

namespace App\Http\Controllers;

use App\Models\Bdtextile;
use Illuminate\Http\Request;

class BdtextileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bdtextile::get();
        return view('page.index', compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bdtextile  $bdtextile
     * @return \Illuminate\Http\Response
     */
    public function show(Bdtextile $bdtextile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bdtextile  $bdtextile
     * @return \Illuminate\Http\Response
     */
    public function edit(Bdtextile $bdtextile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bdtextile  $bdtextile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bdtextile $bdtextile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bdtextile  $bdtextile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bdtextile $bdtextile)
    {
        //
    }
}
