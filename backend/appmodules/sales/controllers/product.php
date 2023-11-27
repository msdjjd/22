<?php
import('appmodules.sales.models.product');
import('appmodules.sales.views.product');

#[AllowDynamicProperties]
class ProductController extends Controller { 
    
    public function add() {
        $this->view->add();
    }

    public function list() {
        $sql = "SELECT * FROM product";
        $products = $this->model->query($sql);
        $this->view->list($products);

    }
}
?>
