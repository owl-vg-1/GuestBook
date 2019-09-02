<?php
namespace App\Controller;

class feedbackController extends Controller{
    use  phpProcessingController;
    private $file_name ='abs.php';


    function actionShowForm (){
        $this->render("feedbackForm", [
            'targettURL' => '?t=feedback&a=processingFeedbackForm',
            // 'targettURL' => '?t='. $this->classNameNP() . '&a=processingFeedbackForm',
            ]);
    }

    function actionProcessingFeedbackForm(){
        // print_r($_POST);
        $this->write_file_php($_POST);



    //     $this->render("feedbackForm", [
    //     'form' => "Форма обратной связи тут!"
    // ]);
    }
}