<script src="../view/js/danhmuc.js"></script>
<?php
    if(is_array($dm)){
    extract($dm);
    }
?>
<div class="row">
    <div class="row formtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatedm" method="post" onsubmit="return checkUpdate()">
            <div class="row mb10"> Mã Loại<br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb10"> Tên Loại<br>
                <input type="text" name="tenloai" id="ten-loai"
                    value="<?php if(isset($name) && ($name != "")) echo $name ; ?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id ; ?>">
                <input type="submit" name="capnhat" value="Cập Nhật" class="btn1">
                <input type="reset" value="Nhập Lại" class="btn1">
                <a href="index.php?act=listdm">
                    <input type="button" value="Danh Sách" class="btn1">
                </a>
            </div>
            <?php
                 if(isset($thongbao) && ($thongbao!= "" )) 
                  echo $thongbao;       
             ?>
        </form>
    </div>
</div>
</div>
</div>