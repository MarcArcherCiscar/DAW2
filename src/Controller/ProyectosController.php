<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProyectosController extends AbstractController
{
    public function index($num)
    {
        if ($num = 1){
            return $this->render('proyectos/proyecto1.html.twig', [
                'controller_name' => 'ProyectosController',
            ]);
        }
            return $this->render('proyectos/proyecto2.html.twig', [
                'controller_name' => 'ProyectosController',
            ]);

    }
}
