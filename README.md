<h2><a href="{{ path('teachers/show',{id: teacher.id}) }}"></a></h2>
 <h2><a href="{{ path('/show') }}">teacher.title</a></h2> 





    /**
     * @Route("teachers/show/{id<(0-9)+>}", name="/show", methods="GET")
     */
    public function show(Teacher $teacher) : Response 
    {
        return $this->render('teachers/show.html.twig', compact('teacher'));
    }
}
