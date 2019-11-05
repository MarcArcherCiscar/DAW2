<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends AbstractController
{
    public function index(Request $request)
    {
        $EstaLogejat = false;
        $username = $request->request->get('user');
        if($username != null){
            $EstaLogejat = true;
            return $this->render('index/index.html.twig', [
                'EstaLogejat' => $EstaLogejat,
            ]);
        }else{
            return $this->render('login/login.html.twig', [
                'controller_name' => 'LoginController',
                'EstaLogejat' => $EstaLogejat,
            ]);
        }
    }
}
