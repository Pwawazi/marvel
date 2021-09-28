<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\MarvelResource;
use Illuminate\Support\Facades\Cache;

class MarvelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $response = Cache::remember('characters', 60, function () {
            $ts = '1';

            /**\
             * The public and private key should be placed in the .env file and only referenced 
             * from there for security purposes however for this project, since the .env will be git.ignore
             * they'll be placed within function scoped variables.
             */
            $public = '6af87d936a60eec77f2a32433a2ecf92';
            $private = 'c596188d55f05196be3b741ed0941687d1a59454';
            $authorization = $ts.$pri.$pub;
            $hash = md5($authorization);

            $data = Http::get('https://gateway.marvel.com/v1/public/characters?ts='.$ts.'&apikey='.$pub.'&hash='.$hash);
            $data = json_decode($data, true);

            $characters = $data['data']['results'];

            return $characters;
        });

        return response($response, 200);
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
