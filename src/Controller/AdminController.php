<?php

namespace App\Controller;

use App\Service\AppHelpers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends AbstractController
{
    private $app;

    public function __construct(AppHelpers $app)
    {
        $this->app = $app;
    }

    public function dashboard(): Response
    {
        return $this->render('admin/dashboard.html.twig', [
            'bodyId' => $this->app->getBodyId('ADMIN_DASHBOARD'),
        ]);
    }
}
