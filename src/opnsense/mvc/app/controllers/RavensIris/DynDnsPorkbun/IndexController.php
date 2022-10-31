<?php

namespace RavensIris\DynDnsPorkbun;
class IndexController extends \OPNsense\Base\IndexController {
    public function indexAction(){
        $this->view->pick('RavensIris/DynDnsPorkbun/index');
        $this->view->generalForm = $this->getForm("general");
    }
}
