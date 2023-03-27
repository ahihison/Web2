<section class="content">
    <div class="container-fluid">
        <?php getMsg(Session::getFlashData('msg'),Session::getFlashData('msg_type')) ?>
        <a href="<?php echo _WEB_HOST_ROOT_ADMIN.'/products/add' ?>" class="btn btn-primary"><i
                class="fa fa-plus"></i>Thêm sản phẩm</a>
        <hr>
        <div class="row">
            <input type="hidden" class="url_module" value="<?php echo _WEB_HOST_ROOT_ADMIN.'/products' ?>">
            <div class="col-4">
                <input class="form-control keyword" placeholder="Nhập vào tên sản phẩm cần tìm kiếm..">
            </div>
            <div class="col-2">
                <select class="form-control category_id">
                    <option value="0">Danh mục sản phẩm</option>
                    <?php 
                        foreach ($list_category as  $cate) {
                            echo "<option value=".$cate['id'].">".$cate['name']."</option>";
                        }
                        ?>
                </select>
            </div>
            <div class="col-2">
                <select class="form-control brand_id">
                    <option value="0">Thương hiệu sản phẩm</option>
                    <?php 
                        foreach ($list_brand as  $brand) {
                            echo "<option value=".$brand['id'].">".$brand['name']."</option>";
                        }
                        ?>
                </select>
            </div>
            <div class="col-2">
                <select class="form-control sort_by">
                    <option value="0">Sắp xếp</option>
                    <option value="1">Từ A-Z</option>
                    <option value="2">Từ Z-A</option>
                </select>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary btn-block btn-search">Tìm kiếm</button>
            </div>
        </div>
        <hr>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th width="">Tên</th>
                    <th width="">Ảnh</th>
                    <th width="">Giá</th>
                    <th width="">Giá giảm</th>
                    <th width="">Danh mục</th>
                    <th width="">Thương hiệu</th>
                    <th width="">Đã bán</th>
                    <th width="">Hàng còn</th>
                    <th width="">Thời gian</th>
                    <th width="8%">Sửa</th>
                    <th width="8%">Xóa</th>
                </tr>
            </thead>
            <tbody class="fetch-data-table">

            </tbody>
        </table>
        <div class="fetch-pagination">
            <!-- render pagination -->
        </div>

    </div>
</section>