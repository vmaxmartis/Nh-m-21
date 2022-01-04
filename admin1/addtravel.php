<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/summernote/dist/summernote.css" rel="stylesheet" />
    <link href="./assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nhom21";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo("nice!");

}else 
    echo("no!");
?>
<?php
$sql1="SELECT * FROM travel ";
$query =  mysqli_query($conn,$sql1);
?>
<?
if($_POST['add'])
{
    $id = $_POST['id'];
    $city = $_POST['city'];
    $rank = $_POST['regions'];
    $title = $_POST['title'];

    $file_name=$_FILES['iva1']['name'];
    $file_path=$_FILES['iva1']['tmp_name'];
    $new_path="../bdesign/images/img_source".$file_name;
    $uploaded_file=move_uploaded_file($file_path,$new_path);

    $address = $_POST['address'];
    $author = $_POST['author   '];
    $content = $_POST['content'];
    $scontent = $_POST['scontent'];
    $like = $_POST['like'];
    $map = $_POST['map'];
    $yt = $_POST['yt'];

   

$query="INSERT INTO travel VALUES  (null,'$city','$regions','$title', '$new_path','$address','$authort','$content','$scontent','$like','$map','$yt' )";
$sql=mysqli_query($conn,$query);
}
else
{
echo "<script>alert('thêm thành công!')</script>";  
}


?>
<body class="fixed-navbar">
<?php include("./form.php") ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">   
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Thêm mới địa điểm du lịch</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item"> Nhập nội dung bài viết du lịch</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                    <div class="ibox-title">Nhập nội dung bài viết du lịch</div>
                    </div>
                    <div class="ibox-body">
                        <div id="summernote" data-plugin="summernote" data-air-mode="true" name="content">
                       
                            </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Các thông tin khác</div>
                            </div>
                            <div class="ibox-body" style="">
                                <form action="addtravel.php" method="POST">
                                    <div class="row">
                                        <div class="col-sm-3 form-group">
                                            <label>Thành phố </label>
                                            <input class="form-control" type="text" placeholder="City" name="city">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Vùng miền</label>
                                            <input class="form-control" type="text" placeholder="regions" name="regions">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Tiêu đề</label>
                                            <input class="form-control" type="text" placeholder="title" name="title">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Địa chỉ</label>
                                            <input class="form-control" type="text" placeholder="address" name="address">
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Ảnh đại diện</label>
                                        <input class="form-control" type="file" placeholder="iva1" name="iva1">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                            <label>Mô tả ngắn</label>
                                            <textarea class="form-control" rows="3" name="scontent"></textarea>
                                    </div>
                                    <div class="col-sm-2 form-group">
                                             <label>ID</label>
                                            <input class="form-control" type="number" name="id">
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 form-group">
                                            <label>Tác giả </label>
                                            <input class="form-control" type="text" placeholder="author" name="author">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>like</label>
                                            <input class="form-control" type="text" placeholder="like" name="like">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>map</label>
                                            <input class="form-control" type="text" placeholder="map" name="map">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>video</label>
                                            <input class="form-control" type="text" placeholder="yt" name="yt">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <button class="btn btn-outline-success" name="add">Lưu vào</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
               
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <?php include("./setting.php") ?>   
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#summernote').summernote();
            $('#summernote_air').summernote({
                airMode: true
            });
        });
    </script>
</body>

</html>