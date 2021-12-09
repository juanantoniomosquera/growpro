<?php

declare(strict_types = 1);

namespace App\Services\Infrastructure\Persistence;

interface Persistence
{
    public function list(): array;
}