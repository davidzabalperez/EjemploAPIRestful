<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ConsumeApiController extends Controller
{
    public function getStarsWars(){
        //Inicializando guzzle
        $client = new Client([
            // Base URI url base el dominio al que nos conectamos
            'base_uri' => 'https://swapi.co/api/',
            // Cuanto tempo queremos esperar por una respuesta
            'timeout'  => 2.0,
        ]);
        //agrega despues de la url base haciendo una peticion GET
        $response = $client->request('GET', 'planets/1');
        $planets = json_decode($response->getBody()->getContents());
        dump($planets);
        return view('planets.index', compact('planets'));

    }
}
