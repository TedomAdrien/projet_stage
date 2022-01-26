<?php

namespace App\Controller;

use App\Entity\Teacher;
use App\Repository\TeacherRepository;
use phpDocumentor\Reflection\DocBlock\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeachersController extends AbstractController
{
    /**
     * @Route("/teachers", name="/teachers")
     */
    public function index(TeacherRepository $teacherRepository): Response
    {
        $teachers = $teacherRepository->findBy([], ['createdAt'=> 'DESC']);

        return $this->render('teachers/index.html.twig', compact('teachers'));
    }

    /**
     * @Route("/teachers/teacher/{id<(0-9)+>}", name="teachers_teacher_show")
     */
    public function show(Teacher $teacher) : Response 
    {
        return $this->render('teachers/show.html.twig', compact('teacher'));
    }
}
