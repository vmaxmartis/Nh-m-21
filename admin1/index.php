<!DOCTYPE html>
<html lang="en">

<?php include("./head.php") ?>

<body class="fixed-navbar">
    <?php include("./form.php") ?>
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Danh sách địa điểm du lịch </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Du lịch Việt Nam</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
            <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Danh sách hiện tại</div>
                    </div>
                    <div class="ibox-body">
                 <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Địa chỉ</th>
                                    <th>Tác giả</th>
                                    <th>Chỉnh sửa</th>
                                </tr>
                            </thead>
                            <?php
                        //Xác định số dòng trên 1 trang
                        $sodong=5   ;
                        if(isset($_GET['trang']))
                        {
                            $page=$_GET['trang'];
                        }
                        else
                        {
                            $page=0;
                        }
                        //Đếm số dòng dl
                        $kn = mysqli_connect("localhost","root","","tms") or die("Không kết nối được");
                        mysqli_query($kn,"SET NAMES 'utf8'");
                        $lldl= "select * from travel";
                        $kqdl=mysqli_query($kn,$lldl);
                        $sodongdl=mysqli_num_rows($kqdl);
                        $sotrangdl=$sodongdl/$sodong;
                        $vtbd=$page*$sodong;
                        ?>
                        <?php 
                        $lpt="select * from travel limit {$vtbd},{$sodong}";
                        $kqpt=mysqli_query($kn,$lpt);
                        ?>
                        <?php 
                        while ($row_pro=mysqli_fetch_array($kqpt)){
                            $machon=$row_pro['id'];
                        ?>
                            <tbody>
                                <tr>
                                    <td> <?php echo $row_pro['id'] ?></td>
                                    <td> <?php echo $row_pro['title'] ?></td>
                                    <td> <img style="width: 100px; height: 60px" src="../bdesign/images/img_source/<?php echo $row_pro['iva1'] ?>"> </td>
                                    <td> <?php echo $row_pro['address'] ?></td>
                                    <td> <?php echo $row_pro['author'] ?></td>
                                    <td> <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td></td>
                                        </tr> <?php }?><?php 
                                    for ($i=0;$i<$sotrangdl;$i++)
                                    {
                                        echo "<a href='index.php?trang=$i'>Trang $i></a>";
                                    }?>
                           
                            </tbody>
                 </table>
                 <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Nhà Hàng</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Địa chỉ</th>
                                    <th>Thành phố</th>
                                    <th>Chỉnh sửa</th>
                                </tr>
                            </thead>
                            <?php
                        //Xác định số dòng trên 1 trang
                        $sodong=5;
                        if(isset($_GET['trang']))
                        {
                            $page=$_GET['trang'];
                        }
                        else
                        {
                            $page=0;
                        }
                        //Đếm số dòng dl
                        $kn = mysqli_connect("localhost","root","","tms") or die("Không kết nối được");
                        mysqli_query($kn,"SET NAMES 'utf8'");
                        $lldl= "select * from restaurant";
                        $kqdl=mysqli_query($kn,$lldl);
                        $sodongdl=mysqli_num_rows($kqdl);
                        $sotrangdl=$sodongdl/$sodong;
                        $vtbd=$page*$sodong;
                        ?>
                        <?php 
                        $lpt="select * from restaurant limit {$vtbd},{$sodong}";
                        $kqpt=mysqli_query($kn,$lpt);
                        ?>
                        <?php 
                        while ($row_pro=mysqli_fetch_array($kqpt)){
                            $machon=$row_pro['id'];
                        ?>
                            <tbody>
                                <tr>
                                    <td> <?php echo $row_pro['id'] ?></td>
                                    <td> <?php echo $row_pro['title'] ?></td>
                                     <td> <img style="width: 100px; height: 60px" src="../bdesign/images/img_source/<?php echo $row_pro['iva1'] ?>"> </td>
                                    <td> <?php echo $row_pro['address'] ?></td>
                                    <td> <?php echo $row_pro['city'] ?></td>
                                    <td> <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td></td>
                                </tr>
                            </tbody>
                                        <?php 
                                
                                }
                                
                                ?> <?php 
                                    for ($i=0;$i<$sotrangdl;$i++)
                                    {
                                        echo "<a href='index.php?trang=$i'>Trang $i></a>";
                                    }?>
                        </table>

                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên Khách sạn</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Địa chỉ</th>
                                    <th>Thành phố</th>
                                    <th>Chỉnh sửa</th>
                                </tr>
                            </thead>
                            <?php
                        //Xác định số dòng trên 1 trang
                        $sodong=5;
                        if(isset($_GET['trang']))
                        {
                            $page=$_GET['trang'];
                        }
                        else
                        {
                            $page=0;
                        }
                        //Đếm số dòng dl
                        $kn = mysqli_connect("localhost","root","","tms") or die("Không kết nối được");
                        mysqli_query($kn,"SET NAMES 'utf8'");
                        $lldl= "select * from hotel";
                        $kqdl=mysqli_query($kn,$lldl);
                        $sodongdl=mysqli_num_rows($kqdl);
                        $sotrangdl=$sodongdl/$sodong;
                        $vtbd=$page*$sodong;
                        ?>
                        <?php 
                        $lpt="select * from hotel limit {$vtbd},{$sodong}";
                        $kqpt=mysqli_query($kn,$lpt);
                        ?>
                        <?php 
                        while ($row_pro=mysqli_fetch_array($kqpt)){
                            $machon=$row_pro['id'];
                        ?>
                            <tbody>
                                <tr>
                                    <td> <?php echo $row_pro['id'] ?></td>
                                    <td> <?php echo $row_pro['title'] ?></td>
                                     <td> <img style="width: 100px; height: 60px" src="../bdesign/images/img_source/<?php echo $row_pro['iva1'] ?>"> </td>
                                    <td> <?php echo $row_pro['address'] ?></td>
                                    <td> <?php echo $row_pro['city'] ?></td>
                                    <td> <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                        <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                    </td></td>
                                </tr><?php }?><?php 
                        for ($i=0;$i<$sotrangdl;$i++)
                        {
                            echo "<a href='index.php?trang=$i'>Trang $i></a>";
                        }
                        ?>
                            </tbody>
                            
                </table>
                     </div>
                </div>
            </div>
       
            
            <!-- END PAGE CONTENT-->
           
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <?php include("./setting.php") ?>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Đang tải dữ liệu</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="./assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
       
    </script>
</body>

</html>