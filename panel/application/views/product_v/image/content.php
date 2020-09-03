<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürünün fotoğrafları
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title">Dropzone</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">
                <form action="../api/dropzone" class="dropzone" data-plugin="dropzone" data-options="{ url: '../api/dropzone'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Drop files here or click to upload.</h3>
                        <p class="m-b-lg text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div><!-- .widget -->
</div>
<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürünün fotoğrafları
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>#id</th>
                        <th>Görsel</th>
                        <th>Resim Adı</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td><img width="50" src="https://www.edigitalagency.com.au/wp-content/uploads/square-payments-logo-png-transparent-background-vertical.png" class="img-responsive"></td>
                            <td>deneme-urunu.jpg</td>
                            <td>
                                <input data-url="<?php echo base_url("product/isActiveSetter/"); ?>" class="isActive" type="checkbox" data-switchery data-color="#10c469" <?php echo (true) ? "checked" : ""; ?> />
                            </td>
                            <td>
                                <button data-url="<?php echo base_url("product/delete/"); ?>" type="button" class="btn btn-sm btn-danger btn-outline remove-btn">
                                    <i class="fa fa-trash"></i> Sil
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>