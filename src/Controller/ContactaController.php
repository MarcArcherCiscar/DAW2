<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ContactaController extends AbstractController
{
    public function index(Request $request)
    {
        $nom = $request->request->get('name');
        $correu = $request->request->get('email');
        $website = $request->request->get('website');
        $asumpte = $request->request->get('subject');
        $missatge = $request->request->get('message');

        return $this->render('contacta/contacta.html.twig', [ 
            'nom' => $nom,
            'correu' => $correu,
            'website' => $website,
            'asumpte' => $asumpte,
            'missatge' => $missatge,
        ]);
    }
}
