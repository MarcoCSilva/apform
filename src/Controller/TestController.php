<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController{
    public function  index($val){
        $request = Request::createFromGlobals();
        dd(
            $request->get('val')
        
        );
    }
}