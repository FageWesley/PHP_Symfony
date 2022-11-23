<?php


namespace App\Controller;

use App\Entity\TodoList;
use App\Form\TodoListType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TodoListController extends AbstractController
{

    #[Route("/list/create", name: "create")]
    public function create(Request $request)
    {
        $todoList = new TodoList();
        $form = $this->createForm(TodoListType::class, $todoList);
        dump($todoList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dump($todoList);
        }

        return $this->render("todo_list/form.html.twig", [
            "form" => $form->createView()
        ]);
    }
}
