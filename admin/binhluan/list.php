<div class="row">
    <div class="row formtitle">
        <h1>Danh sách bình luận</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Id</th>
                    <th>Nội dung bình luận</th>
                    <th>Người bình luận</th>
                    <th>Bình luận sản phẩm</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $suabl = "index.php?act=suabl&id=" . $id;
                    $xoabl = "index.php?act=xoabl&id=" . $id;
                    echo '<tr>
                    <td><input type="checkbox"></td>
                    <td>' . $id . '</td>
                    <td>' . $noidung . '</td>
                    <td>' . $iduser . '</td>
                    <td>' . $idpro . '</td>
                    <td>' . $ngaybinhluan . '</td>
                    <td>
                        <a href="' . $xoabl . '"><i class="fa-solid fa-trash"></i></a>
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
    </style>
</body>