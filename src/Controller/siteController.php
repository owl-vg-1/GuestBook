<?php
namespace App\Controller;

class siteController extends Controller{


    function actionHome (){
        $this->render("home", [
        'title' => "Добро пожаловать!"
    ]);
    }


    function actionAbout (){
        $this->render("about", [
            'about' => "О НАС!"
        ]);
    }

}