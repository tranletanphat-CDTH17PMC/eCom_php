<!DOCTYPE html>
<html lang="en">
<?php
    // tóm tắt : nếu tồn tại biến post(view) và không rỗng thì $view = post(view),thỏa dk thì $view = index
    $view = (isset($_POST['view']) && !empty($_POST['view'])) ? $_POST['view'] : "index";  
?>
<head>
    <?php
        include("view/head.php");
    ?>
</head>
<body>
    <?php
        switch($view){
            case 'index':
                include("view/home/body.php");
                include("view/js.php");
            break;
            case 'login':
                include("view/users/login.php");
                include("view/js.php");
            break;
            case 'sign-up':
                include("view/users/sign-up.php");
                include("view/js.php");
            break;
            case 'shop-grid':
                include("view/store/shop-grid.php");
                include("view/store/js.php");
            break;
            default: 
            break;
        };
    ?>
</body>
</html>
