<script src="../js/login.js"></script>
<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Đăng ký thành viên</div>
            <div class="row boxcontent formtaikhoan ">
                <form action="index.php?act=dangky" method="post" onsubmit="return check()">
                    <div class="row mb10">
                        Email
                        <input type="email" name="email" value="" id="email">
                    </div>
                    <div class=" row mb10">
                        Tên đăng nhập
                        <input type="text" name="user" value="" id="ten-dang-nhap">
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="pass" value="" id="mat-khau">
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Đăng ký" name="dangky">
                        <input type="reset" name="" value="Nhập lại" class="btn1">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php 
                if(isset($thongbao) && ($thongbao != "") ){
                    echo $thongbao;
                }
                ?>
                </h2>
            </div>
        </div>
    </div>
    <div class=" boxphai">
        <?php  include "view/boxright.php" ; ?>
    </div>
</div>
</div>
<script>
function check() {
    let email = document.querySelector("#email");
    let tenDangNhap = document.querySelector("#ten-dang-nhap")
    let password = document.querySelector("#mat-khau")
    if (email.value.trim() === '') {
        alert('Email không được để trống');
        return false;
    } else if (
        email.value.trim().indexOf('.') === -1 ||
        email.value.trim().indexOf('@') === -1
    ) {
        alert('Email không đúng định dạng');
        return false;
    }
    if (tenDangNhap.value.trim() === '') {
        alert('Chưa nhập tên đăng nhập');
        return false;
    }
    if (password.value.trim() === "") {
        alert('Chưa nhập mật khẩu');
        return false;
    }
    return true;
}
</script>