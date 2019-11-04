<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ContactaController extends AbstractController
{
    public function index()
    {
        
        if ($_POST){
            $Nombre = $_POST['Nombre'];
            var_dump($Nombre);
        }
        return $this->render('contacta/contacta.html.twig', [ 
            
        ]);
    }
}
