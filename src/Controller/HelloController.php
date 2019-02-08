<?php

namespace App\Controller;

use App\Entity\Book;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use JMS\Serializer\Serializer;

class HelloController extends FOSRestController implements ClassResourceInterface
{
	/**
	 * @Route("/{id}", name="hello")
     *
     */
    public function indexAction(int $id): Response
    {
//        return new JsonResponse([
//            'hello' => 'This is a simple example of resource returned by your APIs'
//        ]);
        $em = $this->getDoctrine()->getManager();
//            ['id' => 1]
//        );


//        if (!$books) {
//            throw new HttpException(400, "Invalid data");
//        }

        return new JsonResponse($em->getRepository('App:Book')->find($id)) ;

    }
}
