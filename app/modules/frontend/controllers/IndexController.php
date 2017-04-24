<?php

namespace App\Modules\Frontend\Controllers;


use Box\Spout\Common\Type;
use Box\Spout\Reader\ReaderFactory;

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function phpinfoAction()
    {
       $this->view->disable();
       phpinfo();
    }

    public function testAction(){
        $this->view->disable();
    }


}

