<?php include('./header.php'); ?>
<main class="mt-3">
    <div class="container p-3">
        <div class="">
            <div class="col-md-6">
                <h2 class="m-3">Thêm nhân viên a mới</h2>
                <?php
                if (isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
                {
                    echo $_SESSION['add']; //Display the SEssion Message if SEt
                    unset($_SESSION['add']); //Remove Session Message
                }
                ?>
                <form class=" m-5" action="./process/process-add.php" method="POST">
                    <div class="row mb-3">
                        <label for="txt" class="col-sm-4 col-form-label">Mã Người nhận máu</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="txtHoTen" name="txtMa">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtHoTen" class="col-sm-4 col-form-label">Tên Người Nhận</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="txtHoTen" name="ten">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtNamsinh" class="col-sm-4 col-form-label">Năm sinh</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="txtChucVu" name="namsinh">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtSoMayBan" class="col-sm-4 col-form-label">Nhóm máu</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="txtSoMayBan" name="nhommau">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtsl" class="col-sm-4 col-form-label">Số lượng máu cần nhận</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="txtEmail" name="sl">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtMobile" class="col-sm-4 col-form-label">Giới tính</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="txtMobile" name="gioitinh">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtMobile" class="col-sm-4 col-form-label">Ngày đăng kí nhận máu</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="ngaydk" name="gioitinh">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txtMobile" class="col-sm-4 col-form-label">SĐT</label>
                        <div class="col-sm-8">
                            <input type="tel" class="form-control" id="txtMobile" name="phone">
                        </div>
                    </div>
                    <button typse="submit" class="btn btn-primary" name="btnSave">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include("./footer.php") ?>