<div class="row">
    <div class="row formtitle">
        <h1>Quản lý hàng hóa</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo '<tr>
                        <td><input type="checkbox"></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>
                            <a href="' . $suadm . '"><i class="fa-solid fa-pen"></i></a>    
                            <a href="' . $xoadm . '" ><i class="fa-solid fa-trash"></i></a>  
                        </td>
                    </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb10">
            <!-- <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type=" button" value="Xóa các mục đã chọn"> -->
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