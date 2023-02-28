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
