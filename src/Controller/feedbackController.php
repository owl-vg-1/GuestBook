<?php
namespace App\Controller;

class feedbackController extends Controller{


    function actionShowForm (){
        $this->render("home", [
        'title' => "Форма обратной связи тут!"
    ]);
    }


}