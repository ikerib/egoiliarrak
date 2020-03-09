<?php

namespace App\Controller;

use App\Entity\Barrutia;
use App\Form\BarrutiaType;
use App\Repository\BarrutiaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/barrutia")
 */
class BarrutiaController extends AbstractController
{
    /**
     * @Route("/", name="barrutia_index", methods={"GET"})
     */
    public function index(BarrutiaRepository $barrutiaRepository): Response
    {
        return $this->render('barrutia/index.html.twig', [
            'barrutias' => $barrutiaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="barrutia_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $barrutium = new Barrutia();
        $form = $this->createForm(BarrutiaType::class, $barrutium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($barrutium);
            $entityManager->flush();

            return $this->redirectToRoute('barrutia_index');
        }

        return $this->render('barrutia/new.html.twig', [
            'barrutium' => $barrutium,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="barrutia_show", methods={"GET"})
     */
    public function show(Barrutia $barrutium): Response
    {
        return $this->render('barrutia/show.html.twig', [
            'barrutium' => $barrutium,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="barrutia_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Barrutia $barrutium): Response
    {
        $form = $this->createForm(BarrutiaType::class, $barrutium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('barrutia_index');
        }

        return $this->render('barrutia/edit.html.twig', [
            'barrutium' => $barrutium,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="barrutia_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Barrutia $barrutium): Response
    {
        if ($this->isCsrfTokenValid('delete'.$barrutium->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($barrutium);
            $entityManager->flush();
        }

        return $this->redirectToRoute('barrutia_index');
    }
}
