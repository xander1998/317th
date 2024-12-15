<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ModsController
{
    public function fetch() {
        // $collectionResponse = Http::post('https://api.steampowered.com/ISteamRemoteStorage/GetCollectionDetails/v1/?collectioncount=1&publishedfileids%5B0%5D=3370660047');
        // $collectionResponse = Http::withQueryParameters([
        //     'collectioncount' => 1,
        //     'publishedfileids' => [
        //         config('steam.collection_id')
        //     ]
        // ])->post(config('steam.collection_api'));

        return view('mods');
    }
}
