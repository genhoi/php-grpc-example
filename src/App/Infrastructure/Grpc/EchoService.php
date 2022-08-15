<?php

declare(strict_types=1);

namespace App\Infrastructure\Grpc;

use App\Domain\Actions\GetStringAction;
use Platform\Echo\V1\EchoServiceInterface;
use Platform\Echo\V1\GetStringRequest;
use Platform\Echo\V1\GetStringResponse;
use Spiral\RoadRunner\GRPC;

class EchoService implements EchoServiceInterface
{
    public function __construct(
        private readonly GetStringAction $getStringAction,
    ) {
    }

    public function GetString(GRPC\ContextInterface $ctx, GetStringRequest $in): GetStringResponse
    {
        $result = ($this->getStringAction)();

        $response = new GetStringResponse();
        $response->setResult($result);

        return $response;
    }
}
