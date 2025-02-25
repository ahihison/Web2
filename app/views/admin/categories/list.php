<section class="content">
    <div class="container-fluid">
        <?php getMsg(Session::getFlashData('msg'),Session::getFlashData('msg_type')) ?>

        <?php 
        if(isPermission('products','add')){
            ?>
        <a href="<?php echo _WEB_HOST_ROOT_ADMIN.'/categories/add' ?>" class="btn btn-primary"><i
                class="fa fa-plus"></i>Thêm danh mục</a>
        <?php
        }
        ?>

        <hr>
        <div class="row">
            <input type="hidden" class="url_module" value="<?php echo _WEB_HOST_ROOT_ADMIN.'/categories' ?>">
            <div class="col-9">
                <input class="form-control keyword" placeholder="Nhập vào tên danh mục cần tìm kiếm..">
            </div>
            <div class="col-3">
                <button type="submit" class="btn btn-primary btn-block btn-search">Tìm kiếm</button>
            </div>
        </div>
        <hr>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th width="">Tên danh mục</th>
                    <th width="">Hình ảnh</th>
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