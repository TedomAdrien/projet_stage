<?php

namespace App\Controller;

use App\Repository\TeacherRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentController extends AbstractController
{
    /**
     * @Route("/present", name="present")
     */
    public function index(TeacherRepository $teacherRepository): Response
    {
        $teachers = $teacherRepository->findAll();
        return $this->render('present/index.html.twig', compact('teachers'));
    }
}
