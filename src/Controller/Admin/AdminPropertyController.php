<?php

namespace App\Controller\Admin;

use App\Form\PropertyFormType;
use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminPropertyController extends AbstractController {
/**
 * @var PropertyRepository
 */
private $repository;
private $entityManager;

    public function __construct(PropertyRepository $repository, ManagerRegistry $entityManager)
    {
        $this->repository = $repository;
        $this->entityManager = $entityManager->getManager();
    }
    /**
     * @Route("/admin", name="admin.property.index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
{
    // Je veux récupérer tous mes biens :
    $property = $this->repository->findAll(); 
    return $this->render('admin/property/index.html.twig', compact('properties')); // Compact va permettre de retourner un tableau d'éléments.
}
/**
 * @Route("/admin/property/{id}", name="admin.property.edit", methods="GET|POST")
 * @param Property $property
 * @param Request $request
 * @return Response
 */
 
public function edit(Property $property, Request $request)
{
    $form = $this->createForm(PropertyFormType::class, $property);
    // La var $property contient nos données (tab ou entité ici se sont nos entités qui ont toutes les informations nécessaires pour remplir le formulaire).

    if($form->isSubmitted() && $form->isValid){
        // Est-ce que le form a été envoyé & est-ce qu'il est envoyé :
            $this->entityManager->flush();
            $this->addFlash('success', 'Bien modifié avec succès');
            return $this->redirectToRoute('admin.property.index');
    }
    return $this->render('admin/property/edit.html.twig', ['property' => $property, 'form' => $form->createView()]);// Envoi du $form avec l'objet creatView() à notre template via la variable form
}
}

