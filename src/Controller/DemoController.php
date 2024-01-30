<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Service\Slugify;

class DemoController extends AbstractController
{
    #[Route('/demo', name: 'app_demo')]
    public function index(): Response
    {
        $slug = new Slugify();
        $demo = $slug->slugify('ceci est un test');
        
        return $this->render('base.html.twig', [
            'controller_name' => 'DemoController',
            'demo' => $demo
        ]);
    }
}