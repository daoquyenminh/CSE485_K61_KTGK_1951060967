<?php
        //Kiếm tra người dùng nhấn lưu vào form chuwa?
        if(isset($_POST['btnSave'])){
            $ma         = $_POST['ma'];
            $ten        = $_POST['ten'];
            $namsinh    = $_POST['namsinh'];
            $nhommau  = $_POST['nhommau'];
            $sl   = $_POST['sl'];
            $gioitinh  = $_POST['gioitinh'];
            $ngaydl       = $_POST['ngaydk'];
            $phone      = $_POST['phone'];

            //thực hiện quy trình
            require('../config/db.php');

            //b2: truy vấn
            $sql="INSERT intoblood_recipient  (reci_id,reci_name,reci_age,reci_bgrp,reci_bqnty,reci_sex,reci_regdate,reci_phone)
            Value( '$ma', '$ten',  '$namsinh','$nhommau', '$slmau', '$gioitinh','$ngaydk','$phone')";

            if(mysqli_query($conn,$sql)==TRUE){
                $value = 'successfully';
                header("Location:../add.php?response=$value");
            }
            else{
                echo "chuwa thêm dc ";            }
                //đÓng kết nối
                mysqli_close($conn);
        }
        
?> 