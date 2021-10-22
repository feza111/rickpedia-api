<?php


namespace App\Service;


class RoutesService
{
    private APIService $service;

    public function __construct(APIService $service)
    {
        $this->service = $service;
    }

    public function characters($page = 1)
    {
        return $this->service->requestAPI('character', $page);
    }

    public function locations($page = 1)
    {
        return $this->service->requestAPI('location', $page);
    }

    public function episodes($page = 1)
    {
        return $this->service->requestAPI('episode', $page);
    }
}
