<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Form\SearchForm;
use App\Entity\Equipement;
use App\Form\EquipementType;
use App\Repository\EquipementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EquipementController extends AbstractController
{
    /**
     * @Route("/", name="equipement")
     */
    public function index(): Response
    {
        $equipement = $this->getDoctrine()->getRepository(Equipement::class)->findAll();
        return $this->render('equipement_crud/index.html.twig', [
            'equipements' => $equipement,
        ]);
    }
   
    /**
     * @Route("/new", name="equipement_crud_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $equipement = new Equipement();
        $form = $this->createForm(EquipementType::class, $equipement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($equipement);
            $entityManager->flush();

            return $this->redirectToRoute('equipement_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('equipement_crud/new.html.twig', [
            'equipement' => $equipement,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="equipement_crud_show", methods={"GET"})
     */
    public function show(Equipement $equipement): Response
    {
        return $this->render('equipement_crud/show.html.twig', [
            'equipement' => $equipement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="equipement_crud_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Equipement $equipement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipementType::class, $equipement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('equipement_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('equipement_crud/edit.html.twig', [
            'equipement' => $equipement,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="equipement_crud_delete", methods={"POST"})
     */
    public function delete(Request $request, Equipement $equipement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $equipement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($equipement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('equipement_crud_index', [], Response::HTTP_SEE_OTHER);
    }




    //     public function index(): Response
    //     {
    //         return $this->render('equipement/index.html.twig', [
    //             'controller_name' => 'EquipementController',
    //         ]);
    //     }
}
