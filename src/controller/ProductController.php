<?php



namespace app\controller;


use app\model\Product;
use app\model\ProductManage;

class ProductController
{
    protected $productManage;

    public function __construct()
    {
        $this->productManage = new ProductManage();
    }

    function viewAllProduct(){
        $products = $this->productManage->getAllProduct();
        include_once 'src/view/list.php';
    }

    function addProduct(){
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            include_once 'src/view/add.php';
        } else {
            $productName = $_POST['productName'];
            $productLine = $_POST['productLine'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $creat_at = $_POST['creat_at'];
            $description = $_POST['description'];

            $product = new Product($productName,$productLine,$price,$amount,$creat_at,$description);
            $this->productManage->addProduct($product);
            header('location:index.php');
        }
    }

    function deleteProduct(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $id = $_REQUEST['id'];
            $this->productManage->deleteProduct($id);
            header('location:index.php');
        }
    }

    function updateProduct(){
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            $id=$_REQUEST['id'];
            $product = $this->productManage->getProductById($id);
            include_once 'src/view/update.php';
        } else {
            $id = $_REQUEST['id'];
            $productName = $_POST['productName'];
            $productLine = $_POST['productLine'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $creat_at = $_POST['creat_at'];
            $description = $_POST['description'];

            $product = new Product($productName,$productLine,$price,$amount,$creat_at,$description);
            $product->setId($id);
            $this->productManage->updateProduct($product);
            header('location:index.php');
        }
    }

    function searchProduct(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $keyword = $_POST['keyword'];
            $products = $this->productManage->searchProduct($keyword);
            $this->productManage->searchProduct($products);
            include_once 'src/view/list.php';
        }
    }
}