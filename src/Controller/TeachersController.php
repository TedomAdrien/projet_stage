<?php

namespace App\Controller;

use App\Entity\Teacher;
use App\Repository\TeacherRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\DocBlock\Tag;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeachersController extends AbstractController
{

    /**
     * @Route("/teachers", name="/teachers", methods="GET")
     */
    public function base(TeacherRepository $teacherRepository): Response
    {
        $teachers = $teacherRepository->findBy([], ['createdAt' => 'DESC']);

        return $this->render('teachers/index.html.twig', compact('teachers'));
    }


    /**
     * @Route("/teachers/create", name="/create", methods={"GET", "POST"})
     */
    public function create(Request $request, EntityManagerInterface $em) : Response
    {
        $teacher = new Teacher;

        $form = $this->createFormBuilder($teacher)
        ->add('title')
        ->add('description')
        ->getForm()
        ;

        $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                // $teacher = $form->getData();
                // $teacher = new Teacher;
                // $teacher->setTitle($data['title']);
                // $teacher->setDescription($data['description']);
                $em->persist($teacher);
                $em->flush();

                return $this->redirectToRoute('/teachers');

            }

        return $this->render('teachers/create.html.twig', [
            'form'=> $form ->createView()

        ]);

    }



    /**
     * @Route("/teachers/show/{id<[0-9]+>}", name="/show", methods="GET")
     */
    public function show(Teacher $teacher) : Response 
    {
        return $this->render('teachers/show.html.twig', compact('teacher'));
    }
}
