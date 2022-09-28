<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/teams', name: 'app_teams')]
    public function teams(): Response
    {
        return $this->render('integrated/team/index.html.twig', [
        ]);
    }

    #[Route('/teams/details', name: 'app_teams_details')]
    public function teamDetails(): Response
    {
        return $this->render('integrated/team/details.html.twig', [
        ]);
    }
}
