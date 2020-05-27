<?php

namespace App\Http\Controllers;

use App\people;
use App\click25;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if($request->username==''){
            return back();
        }

        session_start();
        $people = people::where('user_name', $request->username)->first();
        if ($people != null) {

            $_SESSION['username'] = $people->user_name;
            $_SESSION['earn'] = $people->earn;
            $_SESSION['id'] = $people->id;
        } else {
            $people = new people;
            $people->user_name = $request->username;
            $people->earn = 0;
            $people->save();

            $click25 = new click25;
            $click25->id = $people->id;
            $click25->save();

            $_SESSION['username'] = $people->user_name;
            $_SESSION['earn'] = $people->earn;
            $_SESSION['id'] = $people->id;
        }

        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\people  $people
     * @return \Illuminate\Http\Response
     */
    public function show(people $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\people  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(people $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\people  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, people $people)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\people  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(people $people)
    {
        //
    }
}
