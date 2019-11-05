<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ServiciosController extends AbstractController
{
    public function index()
    {
        return $this->render('servicios/servicios.html.twig', [
            'controller_name' => 'ServiciosController',
        ]);
    }
}
