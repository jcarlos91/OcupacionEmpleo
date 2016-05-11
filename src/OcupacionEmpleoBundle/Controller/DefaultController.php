<?php

namespace OcupacionEmpleoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{
    public function indexAction(){
        return $this->render('OcupacionEmpleoBundle:Default:index.html.twig');
    }

    public function activaAction(){
    	return $this->render('OcupacionEmpleoBundle:Default:EcoActiva.html.twig');
    }

    public function noActivaAction(){
    	return $this->render('OcupacionEmpleoBundle:Default:noActiva.html.twig');
    }

    public function sectorEconomicoAction(){
    	return $this->render('OcupacionEmpleoBundle:Default:sectorEconomico.html.twig');
    }

    public function posicionOcupacionAction(){
    	return $this->render('OcupacionEmpleoBundle:Default:posicionOcupacion.html.twig');
    }

    public function desocupacionAction(){
    	return $this->render('OcupacionEmpleoBundle:Default:desocupacion.html.twig');
    }

    public function edadAction(){
    	return $this->render('OcupacionEmpleoBundle:Default:edad.html.twig');
    }
}
