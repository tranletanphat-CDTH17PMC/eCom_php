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
                include("view/trangchu/body.php");
                include("view/footer-js.php");
            break;
            case 'login':
                include("view/nguoidung/login.php");
                include("view/footer-js.php");
            break;
            case 'sign-up':
                include("view/nguoidung/sign-up.php");
                include("view/footer-js.php");
            break;
            default : 
                include("view/trangchu/body.php");
                include("view/footer-js.php");
            break;
        };
    ?>
</body>
</html>
