<?php

class Controller_Main extends Controller{

    function __construct(){

        $this->model = new Model_Main();
        $this->view = new View();

        if(isset($_POST['buttonSubmit']))
            $this->Register();

    }

    function __destruct(){
        global $mysqli;
        $mysqli->close();
    }

    function Register(){

        $error = $this->validateRegForm();

        if(count($error) == 0){
            $sql_data = array(
                'adress'	=> $_POST['fieldAdress'],
                'city'		=> $_POST['fieldCity'],
                'area' 	    => $_POST['fieldArea'],
                'street' 	=> $_POST['fieldStreet'],
                'num' 	    => $_POST['fieldNum'],
                'comment'  => $_POST['fieldComment']
            );
            $request = $this->model;
            $request->SqlInsert($sql_data);

            }
    }


    function validateRegForm(){

        if(isset($_POST['buttonSubmit'])){
            $error = array();
            if(empty($_POST['fieldAdress']))
                $error[] = 'Field "Adress" is empty';

            if(empty($_POST['fieldCity']))
                $error[] = 'Field "City" is empty';

            if(empty($_POST['fieldArea']))
                $error[] = 'Field "Area" is empty';

            if(!empty($_POST['fieldNum']) && !ctype_digit($_POST['fieldNum']))
                $error[] ='Field "House #" must contain only numeral';

        }

            return $error;
    }

    function action_index(){
        $data = $this->model->SqlSelect();
        $error = $this->validateRegForm();
        $this->view->generate('main_view.php', 'template_view.php', $data, $error);
    }
}