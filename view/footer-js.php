    
<?php
    switch($view){
        case 'index':
?>
            <!-- Js Plugins -->
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>
            <script src="js/jquery-ui.min.js"></script>
            <script src="js/jquery.slicknav.js"></script>
            <script src="js/mixitup.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/main.js"></script>
<?php
        break;
        case 'login':
?>
            <script src="js/login.js"></script>
<?php
        break;
?>
<?php
        case 'sign-up':
        break;
?>
<?php        
        default :
            echo "Default";
        break;
    };
?>