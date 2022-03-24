<?php
namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Compte;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;

class ApiController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // COMPTES.
    function getComptes () {
        return Compte::all();
    }

    function compteById($id){
        return Compte::find($id);
    }

    function updateCompte (Request $request, $id) {

        //cal posar en la peticio PUT el Header field:
        //Content-Type = application/x-www-form-urlencoded
        $compte = Compte::find($id);
        $compte->update($request->all());

        return $compte;
    }

    function postCompte(Request $request){

        $compte = Compte::create($request->all());
        $compte->save();
        return $compte;

    }

    function deleteCompte($id){

        $compte = Compte::find($id);
        $compte->delete();
        return $compte;
    }



   // CLIENTS.
    function getClients () {
        return Client::all();
    }

    function clientByid($id){
        return Client::find($id);
    }

    function updateClient (Request $request, $id) {
        //cal posar en la peticio PUT el Header field:
        //Content-Type = application/x-www-form-urlencoded
        $client = Client::find($id);
        $client->update($request->all());

        return $client;
    }

    function postClient(Request $request){
        $client = Client::create($request->all());
        $client->save();
        return $client;
    }

    function deleteClient($id){
        $client = Client::find($id);
        $client->delete();
        return $client;
    }

}


