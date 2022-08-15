<?php

declare(strict_types=1);

namespace App\Domain\Actions;

class GetStringAction
{
    public function __invoke(): string
    {
        return base64_encode(random_bytes(10));
    }
}
