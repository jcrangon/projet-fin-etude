<?php

namespace App\Controller;

use App\Service\AppHelpers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class StaticPageController extends AbstractController
{

    public function mentionsLegales(AppHelpers $app): Response
    {
        return $this->render('static_page/mentions.html.twig', [
            'bodyId' => $app->getBodyId('LEGAL_PAGE'),
        ]);
    }

    public function politiqueCookies(AppHelpers $app): Response
    {
        return $this->render('static_page/cookies.html.twig', [
            'bodyId' => $app->getBodyId('COOKIE_PAGE'),
        ]);
    }
}
