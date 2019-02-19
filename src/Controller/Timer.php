<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Timer extends AbstractController
{
    /**
     * @Route("/timer")
     */
    public function startTimer()
    {
        return $this->render('base.html.twig');
    }
}