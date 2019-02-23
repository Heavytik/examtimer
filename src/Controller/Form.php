<?php

namespace App\Controller;

use App\Entity\TimeLimits;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class Form extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(Request $request)
    {
        $timeLimits = new TimeLimits();

        $form = $this->createFormBuilder($timeLimits)
            ->add('returnStartTime', TimeType::class, ['label' => 'Saa palauttaa aikaisintaan'])
            ->add('leaveTime', TimeType::class, ['label' => 'Saa poistua aikaisintaan'])
            ->add('endTime', TimeType::class, ['label' => 'Täytyy palauttaa viimeistään'])
            ->add('save', SubmitType::class, ['label' => 'Aloita'])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $timeLimits = new TimeLimits();
            $timeLimits->setReturnStartTime(123);
            $timeLimits->setLeaveTime(222);
            $timeLimits->setEndTime(333);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($timeLimits);
            $entityManager->flush();

            return $this->redirectToRoute('timer');
        }

        return $this->render('index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}