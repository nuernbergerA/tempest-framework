<?php

declare(strict_types=1);

namespace Tempest\Http\Responses;

use Generator;
use Tempest\Http\IsResponse;
use Tempest\Http\Response;
use Tempest\Http\Status;
use Tempest\View\View;

final class Ok implements Response
{
    use IsResponse;

    public function __construct(
        View|Generator|string|array|null $body = null,
    ) {
        $this->status = Status::OK;
        $this->body = $body;
    }
}
