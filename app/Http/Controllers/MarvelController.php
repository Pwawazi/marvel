<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
            $authorization = $ts.$private.$public;
            $hash = md5($authorization);

            $data = Http::get('https://gateway.marvel.com/v1/public/characters?ts='.$ts.'&apikey='.$public.'&hash='.$hash);
            $data = json_decode($data, true);

            $characters = $data['data']['results'];

            return $characters;
        });

        $characters = Cache::get('characters');

        return view('welcome', ['characters' => $characters]);

    }

}
