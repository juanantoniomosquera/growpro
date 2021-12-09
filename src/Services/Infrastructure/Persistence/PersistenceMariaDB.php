<?php

declare(strict_types = 1);

namespace App\Services\Infrastructure\Persistence;

use App\Entity\Bike;
use App\Repository\BikeRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PersistenceMariaDB implements Persistence
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function list(): array
    {
        return $this->doctrine->getManager()->getRepository(Bike::class)->findAll();
    }

    public function bikeAdd(array $params):bool
    {
        try {
            $bike = new Bike();
            $bike->setSerialNumber($params['serial_number']);
            $bike->setType($params['type']);

            $this->doctrine->getManager()->persist($bike);
            $this->doctrine->getManager()->flush();
            return true;
        } catch(\Exception $e) {
            return false;
        }
    }

}