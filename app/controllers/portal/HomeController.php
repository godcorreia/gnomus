<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;

class HomeController extends ContainerController{

  public function index(){

    $this->view([
      'message' => 'Welcome to Gnomus',
      'title' => 'Home of Gnomus',
    ], 'portal.home');
    
  }

}
?>
