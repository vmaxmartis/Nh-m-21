<!DOCTYPE>
<html>
<?php include("./v1/css.php") ?>
<?php include("./v1/header.php") ?>
<?php if(isset($_SESSION['email'])) {
    echo '<H1 style="color:#f22 ">Bạn đang đăng nhập</H1>';
    echo ' <script>
        var timer = setTimeout(function() {
            window.location="./"
        }, 3000);
    </script>';
    die();
} ?>
<?php include "./v1/registrationform.html" ?>
    <?php
    include "./control/xulydangky.php"
    ?>

<?php include("./v1/scrip.php") ?>
<?php (require_once"./v1/footer.php");?>
</html>
