<!-- nguyenthihuyentrang -->
<div>
    <div>
        <h3>Thêm sản phẩm</h3>
    </div>
    <div>
        <form action="index.php?act=addsanpham" method="post" enctype="multipart/form-data">
            <div>
                Loại sản phẩm: <br>
                <select name="id_danhmuc" id="">
                    <?php
                    foreach ($listdm as $danhmuc_sp) {
                        extract($danhmuc_sp);
                        echo '<option value="' . $id_danhmuc . '">' . $ten_danhmuc . '</option>';
                    }
                    ?>

                </select>
            </div>
            <div>
                Tên sản phẩm: <br>
                <input type="text" name="ten_sanpham">
            </div>
            <div>
                Hình sản phẩm: <br>
                <input type="file" name="img">
            </div>
            <div>
                Hình chi tiết: <br>
                <input type="file" name="list_img">
            </div>
            <div>
                Giá sản phẩm: <br>
                <input type="text" name="gia">
            </div>
            <div>
                Giá sale: <br>
                <input type="text" name="gia_sell">
            </div>
            <div>
                Chi tiết sản phẩm: <br>
                <textarea name="chi_tiet" cols="30" rows="10"></textarea>

            </div>
            <div>
                <input type="submit" name="themmoi" value="Thêm">

                <a href="index.php?act=listsanpham"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
<!-- nguyenthihuyentrang -->