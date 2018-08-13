<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View;

class FilmController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/films")
     */
    public function getFilmsAction()
    {
        $film = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Film')
            ->findAll();
        $view = View::create($film);
        $view->setFormat('json');
        $view->setHeader('Access-Control-Allow-Origin', '*');

        return $view;
    }

}
