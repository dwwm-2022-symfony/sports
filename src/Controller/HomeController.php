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

    #[Route('/teams/new', name: 'app_teams_new')]
    public function teamNew(): Response
    {
        return $this->render('integrated/team/new.html.twig', [
        ]);
    }

    #[Route('/teams/edit', name: 'app_teams_edit')]
    public function teamEdit(): Response
    {
        return $this->render('integrated/team/edit.html.twig', [
        ]);
    }

    #[Route('/sports', name: 'app_sport_index')]
    public function sports(): Response
    {
        return $this->render('integrated/sport/index.html.twig', [
        ]);
    }
}
