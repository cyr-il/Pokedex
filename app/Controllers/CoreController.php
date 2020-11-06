<?php


class CoreController
{
    protected function _show( $viewName, $viewData = [] )
    {
        

        // Construction de la page
        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }


    public function vue( $params, $viewName )
    {

        $viewData = static::$viewName($params);
     
        $this->_show( $viewName, $viewData );
    }

}