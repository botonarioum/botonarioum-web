<?php

namespace App\Controller;

use App\Repository\EntityRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route("/", name="list")
     * @param EntityRepository $entityRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function list(EntityRepository $entityRepository)
    {
        return $this->render('index/list.html.twig', [
            'controller_name' => 'IndexController',
            'entities' => $entityRepository->getAll()
        ]);
    }

    /**
     * @Route("/detail/{id}", name="detail")
     * @param EntityRepository $entityRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detail(int $id, EntityRepository $entityRepository)
    {
        $selectedEntity = $entityRepository->getById($id);

        if ($selectedEntity) {
            return $this->render('index/detail.html.twig', [
                'controller_name' => 'IndexController',
                'entity' => $selectedEntity
            ]);
        }

        throw new NotFoundHttpException('Entity not found');
    }
}
