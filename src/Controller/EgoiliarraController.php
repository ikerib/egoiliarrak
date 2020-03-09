<?php

namespace App\Controller;

use App\Entity\Egoiliarra;
use App\Form\EgoiliarraSearchFormType;
use App\Form\EgoiliarraType;
use App\Repository\EgoiliarraRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/egoiliarra")
 */
class EgoiliarraController extends AbstractController
{
    /**
     * @Route("/", name="egoiliarra_index", methods={"GET"})
     * @param Request              $request
     * @param EgoiliarraRepository $egoiliarraRepository
     *
     * @return Response
     */
    public function index(Request $request, EgoiliarraRepository $egoiliarraRepository): Response
    {
        $egoiliarrak = null;

        $searchForm = $this->createForm(EgoiliarraSearchFormType::class, null, [
            'action' => $this->generateUrl('egoiliarra_index'),
            'method' => 'GET'
        ]);

        $searchForm->handleRequest($request);

        $egoiliarrak = $egoiliarraRepository->findAll();
        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $data = $searchForm->getData();
            
        }


        return $this->render('egoiliarra/index.html.twig', [
            'egoiliarras' => $egoiliarrak,
            'searchForm' => $searchForm->createView(),

        ]);
    }

    /**
     * @Route("/new", name="egoiliarra_new", methods={"GET","POST"})
     * @param Request $request
     *
     * @return Response
     */
    public function new(Request $request): Response
    {
        $egoiliarra = new Egoiliarra();
        $form = $this->createForm(EgoiliarraType::class, $egoiliarra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($egoiliarra);
            $entityManager->flush();

            return $this->redirectToRoute('egoiliarra_index');
        }

        return $this->render('egoiliarra/new.html.twig', [
            'egoiliarra' => $egoiliarra,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="egoiliarra_show", methods={"GET"})
     * @param Egoiliarra $egoiliarra
     *
     * @return Response
     */
    public function show(Egoiliarra $egoiliarra): Response
    {
        return $this->render('egoiliarra/show.html.twig', [
            'egoiliarra' => $egoiliarra,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="egoiliarra_edit", methods={"GET","POST"})
     * @param Request    $request
     * @param Egoiliarra $egoiliarra
     *
     * @return Response
     */
    public function edit(Request $request, Egoiliarra $egoiliarra): Response
    {
        $form = $this->createForm(EgoiliarraType::class, $egoiliarra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('egoiliarra_index');
        }

        return $this->render('egoiliarra/edit.html.twig', [
            'egoiliarra' => $egoiliarra,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="egoiliarra_delete", methods={"DELETE"})
     * @param Request    $request
     * @param Egoiliarra $egoiliarra
     *
     * @return Response
     */
    public function delete(Request $request, Egoiliarra $egoiliarra): Response
    {
        if ($this->isCsrfTokenValid('delete'.$egoiliarra->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($egoiliarra);
            $entityManager->flush();
        }

        return $this->redirectToRoute('egoiliarra_index');
    }
}
