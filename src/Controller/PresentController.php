<?php

namespace App\Controller;

use App\Entity\Teacher;
use App\Entity\Presence;
use App\Form\PrensentType;
use App\Repository\TeacherRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentController extends AbstractController
{
    /**
     * @Route("/present", name="present_choice")
     */
    public function index(TeacherRepository $teacherRepository): Response
    {
        $teachers = $teacherRepository->findAll();
        return $this->render('present/choice.html.twig', compact('teachers'));
    }

    /**
     * @Route("/present/create", name="present_create")
     */
    public function create(): Response
    {

        return $this->render('present/fiche.html.twig');
    }

       
}
