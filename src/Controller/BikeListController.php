<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\Infrastructure\Persistence\PersistenceMariaDB;

class BikeListController extends AbstractController
{
    #[Route('/bikeList', name: 'bikeList')]
    public function __invoke(PersistenceMariaDB $persistenceMariaDB)
    {
        dd($persistenceMariaDB->list());
    }
}