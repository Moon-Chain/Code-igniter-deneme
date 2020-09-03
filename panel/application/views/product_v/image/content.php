<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("product/image_upload/$item->id"); ?>" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url("product/image_upload/$item->id"); ?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Yüklemek istediğiniz resimleri buraya sürükleyiniz</h3>
                        <p class="m-b-lg text-muted">(Yüklemek için dosyalarınızı sürükleyiniz yada buraya tıklayınız)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div><!-- .widget -->
</div>
<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <b><?php echo $item->title; ?></b> kaydına ait resimler
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <table class="table table-bordered table-striped table-hover pictures_list">
                    <thead>
                        <th>#id</th>
                        <th>Görsel</th>
                        <th>Resim Adı</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w100 text-center">#1</td>
                            <td class="w100 text-center"><img width="50" src="https://www.edigitalagency.com.au/wp-content/uploads/square-payments-logo-png-transparent-background-vertical.png" class="img-responsive"></td>
                            <td>deneme-urunu.jpg</td>
                            <td class="w100 text-center">
                                <input data-url="<?php echo base_url("product/isActiveSetter/"); ?>" class="isActive" type="checkbox" data-switchery data-color="#10c469" <?php echo (true) ? "checked" : ""; ?> />
                            </td>
                            <td class="w100 text-center">
                                <button data-url="<?php echo base_url("product/delete/"); ?>" type="button" class="btn btn-sm btn-danger btn-outline remove-btn btn-block">
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