<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FightersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Grab list of all fighters

        $last_key = '6a440b2acb3d45bcae299abb9813839c';

        $fighters =  Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])->get('https://api.sportsdata.io/v3/mma/scores/json/Fighters')->json();

        
        //dd($fighters[0]['CareerStats']);

        return view('fighters',[
            'fighters' => $fighters
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
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
        $last_key = '6a440b2acb3d45bcae299abb9813839c';

        $fighter =  Http::withHeaders(['Ocp-Apim-Subscription-Key'=>$last_key])->get('https://api.sportsdata.io/v3/mma/scores/json/Fighter/'. $id)->json();

        dd($fighter);

        return view('fighter',[
            'fighter' => $fighter
        ]);
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
        //
    }
}
