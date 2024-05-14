<?php 
    //index.php
    //Xử lý yêu cầu từ người dùng
    $page = $_GET['page'] ?? 'home';

    switch ($page) {
        case 'home':
            require_once("app/controllers/HomeController.php");
            $homeController = new HomeController();
            $homeController->index();
            break;
        case 'product':
            require_once("app/controllers/ProductController.php");
            $productController = new ProductController();
            $productController->list();
            break;
        case 'detail':
            require_once("app/controllers/ProductController.php");
            $productController = new ProductController();
            $productController->detail();
            break;
        default:
            //Trang không tồn tại, có thể chuyển hướng hoặc hiển thị trang 404
            echo 'Trang không tồn tại';
            break;
    }
?>