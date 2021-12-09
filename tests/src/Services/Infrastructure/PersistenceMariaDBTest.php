<?php

use PHPUnit\Framework\TestCase;
use App\Services\Infrastructure\Persistence\PersistenceMariaDB;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class PersistenceMariaDBTest extends KernelTestCase
{
    private $persistenceMariaDB;

    public function setUp(): void
    {
        self::bootKernel();

        $this->persistenceMariaDB = new PersistenceMariaDB(self::$container->get('Doctrine\Persistence\ManagerRegistry'));
    }

    public function testBikeList(): void
    {
        $this->assertIsArray(
            $this->persistenceMariaDB->list()
        );
    }

    public function testBikeAdd(): void
    {
        $this->assertTrue(
            $this->persistenceMariaDB->bikeAdd(['serial_number' => 'sn33333333', 'type' => 'premium'])
        );
    }

}