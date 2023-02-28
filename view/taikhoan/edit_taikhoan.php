<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Cập nhật tài khoản</div>
            <div class="row boxcontent formtaikhoan ">
                <?php 
                if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                    
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post" onsubmit="return editUserCheck()">
                    <div class=" row mb10">
                        Tên đăng nhập
                        <input type="text" name="user" value="<?=$user ?>" id="username">
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="pass" value="<?=$pass ?>" id="password">
                    </div>
                    <div class="row mb10">
                        Email
                        <input type="email" name="email" value="<?=$email ?>" id="email">
                    </div>
                    <div class="row mb10">
                        Địa chỉ
                        <input type="text" name="address" value="<?=$address ?>" id="address">
                    </div>
                    <div class="row mb10">
                        Điện thoại
                        <input type="text" name="tel" value="<?=$tel ?>" id="phone-number">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id ?>">
                        <input type="submit" value="Cập nhật" name="capnhat" class="btn1">
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
function editUserCheck() {
    let username = document.querySelector("#username");
    let password = document.querySelector("#password");
    let email = document.querySelector("#email");
    let address = document.querySelector("#address");
    let phoneNumber = document.querySelector("#phone-number");

    if (username.value.trim() === '') {
        alert('Tên không được để trống');
        return false;
    }
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
    if (password.value.trim() === '') {
        alert('Password không được để trống');
        return false;
    }

    if (address.value.trim() === '') {
        alert('Địa chỉ không được để trống');
        return false;
    }

    if (phoneNumber.value.trim() === '') {
        alert('SDT không được để trống');
        return false;
    }
    return true;
}
</script>