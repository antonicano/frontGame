<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Unidades;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class UnidadesController extends AbstractController
{
    #[Route('/unidades', name: 'unidades')]
    public function getUnidades(): Response
    {

        $em = $this->getDoctrine()->getManager();

        $allUnidades = $em->getRepository(Unidades::class)->findAll();
        
        $units = [];
        foreach($allUnidades as $unidades){
            $ar = array(
                "recolectores" => $unidades->getRecolectores()
            );

            $units[] = $ar;
        }
        
        return $this->json(
            $units
        );
    }
}
