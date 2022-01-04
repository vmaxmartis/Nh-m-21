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
<?php require_once 'conn.php' ?>
<?php
    if(isset($_POST['them'])){
        $city = $_POST['city'];
        $type = $_POST['type'];
        $title = $_POST['title'];
        $iva1 = $_POST['iva1'];
        $iva2 = $_POST['iva2'];
        $iva3 = $_POST['iva3'];
        $iva4 = $_POST['iva4'];
        $iva5 = $_POST['iva5'];
        $content = $_POST['content'];
        $shortcontent = $_POST['shortcontent'];
        $open = $_POST['open'];
        $close = $_POST['close'];
        $pricemax = $_POST['pricemax'];
        $pricemin = $_POST['pricemin'];
        $address = $_POST['address'];
        $nborate = $_POST['nborate'];
        $rate = $_POST['rate'];
        $map = $_POST['map'];
        if($conn -> query("INSERT INTO `restaurant`(`id`, `city`, `type`, `title`, `iva1`, `iva2`, `iva3`, `iva4`, `iva5`, `content`, `shortcontent`, `open`, `close`, `pricemax`, `pricemin`, `address`, `nborate`, `rate`, `map`) VALUES ('','$city','$type','$title','$iva1','$iva2','$iva3','$iva4','$iva5','$shortcontent','$content','$open','$close','$pricemax','$pricemin','$address','$nborate','$rate','$map')")){
            echo "<script>alert('thêm thành công!')</script>";  
        }else echo "<script>alert('thêm không thành công!')</script>";

    }$conn -> close();
?>
<body class="fixed-navbar">
<?php include("./form.php") ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Thêm một Nhà Hàng mới</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Thêm một Nhà Hàng mới</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Các thông tin khác</div>
                            </div>
                            <div class="ibox-body" style="">
                                <form method="POST" action="#">
                                    <div class="row">
                                        <div class="col-sm-3 form-group">
                                            <label>Thành phố </label>
                                            <input class="form-control" type="text" placeholder="City" name="city">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>type</label>
                                            <input class="form-control" type="text" placeholder="Vùng miền" name="type">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Tiêu đề</label>
                                            <input class="form-control" type="text" placeholder="title" name="title">
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Ảnh đại diện</label>
                                        <input class="form-control" type="file" name="iva1">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Ảnh 1</label>
                                        <input class="form-control" type="file" name="iva2">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Ảnh 2</label>
                                        <input class="form-control" type="file" name="iva3">
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Ảnh 3</label>
                                        <input class="form-control" type="file" name="iva4">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Ảnh 4</label>
                                        <input class="form-control" type="file" name="iva5">
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-6 form-group">
                                            <label>Nội dung</label>
                                            <textarea class="form-control" rows="2" name="content"></textarea>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                            <label>Mô tả ngắn</label>
                                            <textarea class="form-control" rows="2" name="shortcontent"></textarea>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 form-group">
                                            <label>Check-in </label>
                                            <input class="form-control" type="text" placeholder="7h00" name="open">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Check-out</label>
                                            <input class="form-control" type="text" placeholder="21h00" name="close">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Price - max</label>
                                            <input class="form-control" type="number" placeholder="500000" value="1150000" name="pricemax">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Price - min</label>
                                            <input class="form-control" type="number" placeholder="150000" value="150000" name="pricemin">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 form-group">
                                            <label>Address </label>
                                            <input class="form-control" type="text" placeholder="Địa chỉ" name="address">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>Nborate</label>
                                            <input class="form-control" type="number" placeholder="1009" name="nborate">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>rate</label>
                                            <input class="form-control" type="number" placeholder="1008" name="rate">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <label>map</label>
                                            <input class="form-control" type="text" placeholder="link map" name="map">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <button name="them" class="btn btn-outline-success">Lưu vào</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
               
            </div>
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Danh sách Nhà Hàng hiện tại</div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td>2009/06/25</td>
                                    <td>$675,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
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
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
</body>

</html>