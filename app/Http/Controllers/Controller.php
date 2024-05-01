<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class Controller
{
    public function index() {
        $response = Http::withHeaders(['Authorization' => 'Bearer USF9Yi2xdGED0YhwoS7zT5Yn0bto5zzMEC'])->get('https://us.api.blizzard.com/hearthstone/cards/678?locale=en_US');
        $card = $response->json();

        return view('welcome', ['card' => $card]);

    }
}
