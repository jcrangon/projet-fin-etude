<?php

namespace App\Controller;

use App\Service\AppHelpers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MembreController extends AbstractController
{
    private $app;

    public function __construct(AppHelpers $app)
    {
        $this->app = $app;
    }

    public function dashboard(): Response
    {
        return $this->render('membre/dashboard.html.twig', [
            'bodyId' => $this->app->getBodyId('MEMBER_DASHBOARD'),
        ]);
    }
}
