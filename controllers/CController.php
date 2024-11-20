<?php

require_once ('./models/CModel_db.php');
require_once ('./views/CView.php');

class CController {
    public $model;
    public $view;

    public function SetMainPage () {
        $model = new CModelDB();
        $resultModel = $model->GetData();

        // $view = new CView();
        // $resultView = $view->ViewMainPage();

        return $resultModel;
    }

    
}