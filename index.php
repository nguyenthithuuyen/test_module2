<?php
require __DIR__."/vendor/autoload.php";

$controller = new \app\controller\ProductController();
$page = isset($_REQUEST['page'])?$_REQUEST['page']: NULL;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
switch ($page){
    case 'list':
        $controller->viewAllProduct();
        break;
    case 'add':
        $controller->addProduct();
        break;
    case 'delete':
        $controller->deleteProduct();
        break;
    case 'update':
        $controller->updateProduct();
        break;
    case 'search':
        $controller->searchProduct();
        break;
    default:
        $controller->viewAllProduct();
}


?>

</body>
</html>