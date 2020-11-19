<!DOCTYPE html>
<html lang="en">
<?php
    include("view/head.php");
?>
<body>
    <?php
        $view = (isset($_POST['view']) ? $_POST['view'] : 'index');
        if(isset($_POST['view']))
            $view = $_POST['view'];
        else
            $view = 'index';
        echo $view;
    ?>
</body>
</html>
