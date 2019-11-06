<?php

namespace App\Controller;

use App\Entity\Picture;
use App\Repository\GaleryRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            
        ]);
    }

    /**
     * @Route("/", name="home_toiles")
     */
    public function toiles(GaleryRepository $galeryRepo, Picture $picture)
    {
        return $this->render('home/index.html.twig', [
            'galery' => $galeryRepo->findAll(),
        ]);
    }
}
