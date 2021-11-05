<?php 
include('../model/Product.php');

use Model\Product;
$productAction = new ProductAction();
$productModel  = new Product();
switch($_REQUEST['a']){
    case 'viewAll':
        $productAction->viewAll();
        break;
    case 'insert':
        $productAction->insert();
        break;
    case 'insertNewData':
        $productModel->insertData($_REQUEST);
        break;
    case 'update':
        $productAction->update();
        break;
    case 'updateNewData':
        $productModel->updateData($_REQUEST);
        break;
    case 'delete':
        $productModel->deleteData($_REQUEST);
        break;
        
    
}

class ProductAction{
    public function redirect($section){
        include '../view/'.$section;
    }
    public function viewAll(){
        $this->redirect('index.php');
    }
    public function insert(){
        $this->redirect('insert.php');
    }
    public function update(){
        $this->redirect('insert.php');
    }
}