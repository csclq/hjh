<?php

namespace App\Modules\Gxc\Controllers;

class IndexController extends ControllerBase{

    public function initialize(){
        if(!$this->session->get("openid")){
            $response=$this->weixin->oauth->scopes(['snsapi_userinfo']) ->redirect('http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]);
            $response->send();
            $this->session->set('openid',$this->weixin->oauth->user()->getId());
        }
        $this->openid=$this->session->get('openid');
    }



    public function indexAction(){
        $this->view->disable();
    }

    public function testAction(){
            $this->view->disable();
            echo $this->openid;
    }

}