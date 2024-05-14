<!-- Controller /HomeController.php -->
<?php 
    //Controllers/HomeController.php
    class HomeController {
        public function index() {
            //$user = new User();
            //$userData = $user->get_browser_data();
            $titlepage = "";
            $newproduct=[];
            $bestproduct=[];
            //Load view
            include_once("app/views/home/index.php");
        }
    }

    //Controllers/HomeController.php
    class ProductController {
        public function list() {
            //$pro = new Product();
            //$prolist=$pro->get_list();
            $titlepage = "Danh sách sản phẩm";
            $prolist=[];
            //Load view
            include_once("app/views/product/list.php");
        }
        public function detail() {
            //$pro=new Product();
            //$prodetail=[];
            $titlepage="Chi tiết sản phẩm";
            $prodetail=[];
            include_once("app/views/product/detail.php");
        }
    }
?>