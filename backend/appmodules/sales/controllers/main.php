<?php
import('appmodules.sales.models.main');
import('appmodules.sales.views.main');

#[AllowDynamicProperties]
class MainController extends Controller { 
    
    public function trompetas() {
        $this->view->showTrompetas();
    }
    public function trombones() {
        $this->view->showTrombones();
    }

    public function Clarinetes() {
        $this->view->showClarinetes();
    }
    public function list() {
        $sql = "SELECT * FROM product";
        $products = $this->model->query($sql);
        $this->view->list($products);

    }
}
?>
