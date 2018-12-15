<?php

namespace SlimADR\Action;

use SlimADR\Responder\Dashboard\DashboardResponder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class DashboardAction
{
    /** @var DashboardResponder */
    protected $responder;

    public function __construct(DashboardResponder $responder)
    {
        $this->responder = $responder;
    }

    public function __invoke(Request $request, Response $response, $name = null): Response
    {
        return $this->responder->render(
            $response,
            [
                'name'  => $name ?? 'visitor',
            ]
        );
    }
}
