<?php include './header.php' ?>


<main class="m-5">
    <div class="container">
        <h1 class="h2 text-center text-danger p-3 ">BẢNG LƯU TRỮ THÔNG TIN NGƯỜI NHẬN MÁU</h1>
        <span class=" m-2 p-2 rounded" style="background-color :#f7925c" ;>
            <a href="add.php" class="text-light"><i class="fas fa-plus"></i> Thêm</a>
        </span>

        <div class="directory-table">
            <table id="tbl_exporttable_to_xls" class="tbl table mt-5 ">
            <thead>
                    <tr>
                        <th scope="col">stt</th>
                        <th scope="col">Mã Người Nhận</th>
                        <th scope="col">Tên người nhận</th>
                        <th scope="col">Năm sinh</th>
                        <th scope="col">Nhóm máu</th>
                        <th scope="col">Số lượng máu cần nhận</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Ngày đăng kí nhận máu </th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Chi tiết</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php

                    include('config/db.php');
                    $select = 'SELECT * FROM blood_recipient'; 
                    $result = mysqli_query($conn,$select);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $i++;
                ?>
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $row['reci_id']; ?></td>
                        <td><?php echo $row['reci_name']; ?></td>
                        <td><?php echo $row['reci_age']; ?></td>
                        <td><?php echo $row['reci_bgrp']; ?></td>
                        <td><?php echo $row['reci_bqnty']; ?></td>
                        <td><?php echo $row['reci_sex']; ?></td>
                        <td><?php echo $row['reci_reg_date']; ?></td>
                        <td><?php echo $row['reci_phno']; ?></td>
                        <td><a href="./chitiet.php?id=<?php echo $row['reci_id']; ?>">chi tiết</a></td>
                        
                    </tr>
                <?php }?>
                </tbody>
            </table>

        </div>

    </div>
<style>
a{
    text-decoration: none;
}
                    
</style>


</main>

<?php include './footer.php' ?>