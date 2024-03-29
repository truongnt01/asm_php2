<?php
require_once 'vendor/autoload.php';
//Nạp namespace bằng từ khóa use
use Web\Pagination;
use Web\Product;
use Web\db;
use Web\ProductController;

$url = $_GET['url'] ?? "/";
switch ($url) {
    case "/":
        $productController = new ProductController();
        $productController->listProduct();
        break;
    case 'add-product':
        $productController = new ProductController();
        $productController->addProduct();
        break;
    case 'edit-product':
        $productController = new ProductController();
        if(isset($_GET['save'])){
            $productController->editProduct();
        }else{
            $productController->editProduct(false);
        }
        break;
    case 'delete-product':
        $productController = new ProductController();
        $productController->deleteProduct();
        break;
}
die();