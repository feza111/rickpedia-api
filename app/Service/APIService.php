<?php


namespace App\Service;


use Illuminate\Support\Facades\Http;

class APIService
{
    public function requestAPI($route, $page = 1)
    {
        return Http::get("https://rickandmortyapi.com/api/$route?page=$page")->json();
    }
}
