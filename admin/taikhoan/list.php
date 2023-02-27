<div class="row">
    <div class="row formtitle">
        <h1>Danh sách tài khoản</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã tài khoản</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Vai trò</th>
                    <th></th>
                </tr>
                <?php 
                   foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=". $id;
                    echo '<tr>
                    <td><input type="checkbox"></td>
                    <td>' . $id . '</td>
                    <td>' . $user . '</td>
                    <td>' . $pass. '</td>
                    <td>' . $email . '</td>
                    <td>' . $address . '</td>
                    <td>' . $tel . '</td>
                    <td>' . $role . '</td>
                    <td>
                       <a href="'.$suatk.'"><i class="fa-solid fa-pen"></i></a>
                       <a href="'.$xoatk.'"><i class="fa-solid fa-trash"></i></a>
                    </td>
                    </tr>';
                    }
                 ?>
            </table>
        </div>
        <div class="row mb10">
            <!-- <input type="button" value="Chọn tất cả">
            <input type=" button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn"> -->
            <a href="index.php?act=adddm">
                <input type="button" value="Nhập thêm" class="btn1">
            </a>
        </div>
        </form>
    </div>
</div>
</div>
</div>

<body>
    <style>
    .fa-trash {
        color: red;
        font-size: 30px;
    }

    .fa-pen {
        color: greenyellow;
        font-size: 30px;
        margin-right: 30px;
    }
    </style>
</body>