<?php

namespace AppController;

use Symfony\Component\Routing\Annotation\Route;

class OlaMundoController
{

  /**
   * @Route("/Ola");
   */

  public function olamundoAction()
  {
    echo 'Ola Mundo pau no cu de bom';
    exit();
  }
}
