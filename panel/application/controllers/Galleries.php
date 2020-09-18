<?php

class Galleries extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "galleries_v";

        $this->load->model("gallery_model");
        $this->load->model("image_model");
        $this->load->model("video_model");
        $this->load->model("file_model");
    }

<<<<<<< HEAD
    public function index(){
=======
    public function index()
    {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $items = $this->gallery_model->get_all(
<<<<<<< HEAD
            array(), "rank ASC"
=======
            array(),
            "rank ASC"
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
        );

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

<<<<<<< HEAD
    public function new_form(){
=======
    public function new_form()
    {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

        $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
<<<<<<< HEAD

    }

    public function save(){
=======
    }

    public function save()
    {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

        $this->load->library("form_validation");

        // Kurallar yazilir..
        $this->form_validation->set_rules("title", "Galeri Adı", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        $validate = $this->form_validation->run();

<<<<<<< HEAD
        if($validate){
=======
        if ($validate) {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

            $gallery_type = $this->input->post("gallery_type");
            $path         = "uploads/$this->viewFolder/";
            $folder_name = "";

<<<<<<< HEAD
            if($gallery_type == "image"){

                $folder_name = convertToSEO($this->input->post("title"));
                $path = "$path/images/$folder_name";

            } else if($gallery_type == "file"){
=======
            if ($gallery_type == "image") {

                $folder_name = convertToSEO($this->input->post("title"));
                $path = "$path/images/$folder_name";
            } else if ($gallery_type == "file") {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

                $folder_name = convertToSEO($this->input->post("title"));
                $path = "$path/files/$folder_name";
            }


<<<<<<< HEAD
            if($gallery_type != "video"){

                if(!mkdir($path, 0755)){
=======
            if ($gallery_type != "video") {

                if (!mkdir($path, 0755)) {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text" => "Galeri Üretilirken problem oluştu. (Yetki Hatası)",
                        "type"  => "error"
                    );

                    // İşlemin Sonucunu Session'a yazma işlemi...
                    $this->session->set_flashdata("alert", $alert);

<<<<<<< HEAD
                    redirect(base_url("galerries"));
                    die();
                }

=======
                    redirect(base_url("galleries"));
                    die();
                }
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
            }

            $insert = $this->gallery_model->add(
                array(
                    "title"         => $this->input->post("title"),
                    "gallery_type"  => $this->input->post("gallery_type"),
                    "url"           => convertToSEO($this->input->post("title")),
                    "folder_name"   => $folder_name,
                    "rank"          => 0,
                    "isActive"      => 1,
                    "createdAt"     => date("Y-m-d H:i:s")
                )
            );

            // TODO Alert sistemi eklenecek...
<<<<<<< HEAD
            if($insert){
=======
            if ($insert) {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde eklendi",
                    "type"  => "success"
                );
<<<<<<< HEAD

=======
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Ekleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("galleries"));
<<<<<<< HEAD

=======
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
<<<<<<< HEAD

    }

    public function update_form($id){
=======
    }

    public function update_form($id)
    {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->gallery_model->get(
            array(
                "id"    => $id,
            )
        );
<<<<<<< HEAD
        
=======

>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
<<<<<<< HEAD


    }

    public function update($id, $gallery_type, $oldFolderName = ""){
=======
    }

    public function update($id, $gallery_type, $oldFolderName = "")
    {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

        $this->load->library("form_validation");

        // Kurallar yazilir..
        $this->form_validation->set_rules("title", "Galeri Adı", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        $validate = $this->form_validation->run();

<<<<<<< HEAD
        if($validate){
=======
        if ($validate) {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

            $path         = "uploads/$this->viewFolder/";
            $folder_name = "";

<<<<<<< HEAD
            if($gallery_type == "image"){

                $folder_name = convertToSEO($this->input->post("title"));
                $path = "$path/images";

            } else if($gallery_type == "file"){
=======
            if ($gallery_type == "image") {

                $folder_name = convertToSEO($this->input->post("title"));
                $path = "$path/images";
            } else if ($gallery_type == "file") {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

                $folder_name = convertToSEO($this->input->post("title"));
                $path = "$path/files";
            }


<<<<<<< HEAD
            if($gallery_type != "video"){

                if(!rename("$path/$oldFolderName", "$path/$folder_name")){
=======
            if ($gallery_type != "video") {

                if (!rename("$path/$oldFolderName", "$path/$folder_name")) {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text"  => "Galeri Üretilirken problem oluştu. (Yetki Hatası)",
                        "type"  => "error"
                    );

                    // İşlemin Sonucunu Session'a yazma işlemi...
                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("galleries"));
                    die();
                }
<<<<<<< HEAD

=======
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
            }


            $update = $this->gallery_model->update(
                array(
                    "id"    => $id
                ),
                array(
                    "title"         => $this->input->post("title"),
                    "folder_name"   => $folder_name,
                    "url"           => convertToSEO($this->input->post("title")),
                )
            );

            // TODO Alert sistemi eklenecek...
<<<<<<< HEAD
            if($update){
=======
            if ($update) {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde güncellendi",
                    "type"  => "success"
                );
<<<<<<< HEAD

=======
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Güncelleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
<<<<<<< HEAD

=======
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("galleries"));
<<<<<<< HEAD

=======
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
        } else {

            $viewData = new stdClass();

            /** Tablodan Verilerin Getirilmesi.. */
            $item = $this->gallery_model->get(
                array(
                    "id"    => $id,
                )
            );

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;
            $viewData->item = $item;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }
<<<<<<< HEAD

    }

    public function delete($id){
=======
    }

    public function delete($id)
    {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0


        $gallery = $this->gallery_model->get(
            array(
                "id"    => $id
            )
        );

<<<<<<< HEAD
        if($gallery){


            if($gallery->gallery_type != "video"){

                if($gallery->gallery_type == "image")
                    $path = "uploads/$this->viewFolder/images/$gallery->folder_name";
                else if($gallery->gallery_type == "file")
=======
        if ($gallery) {


            if ($gallery->gallery_type != "video") {

                if ($gallery->gallery_type == "image")
                    $path = "uploads/$this->viewFolder/images/$gallery->folder_name";
                else if ($gallery->gallery_type == "file")
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
                    $path = "uploads/$this->viewFolder/files/$gallery->folder_name";

                $delete_folder = rmdir($path);

<<<<<<< HEAD
                if(!$delete_folder){
=======
                if (!$delete_folder) {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text" => "Kayıt silme sırasında bir problem oluştu",
                        "type"  => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);
                    redirect(base_url("galleries"));

                    die();
                }
<<<<<<< HEAD

=======
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
            }

            $delete = $this->gallery_model->delete(
                array(
                    "id"    => $id
                )
            );

            // TODO Alert Sistemi Eklenecek...
<<<<<<< HEAD
            if($delete){
=======
            if ($delete) {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde silindi",
                    "type"  => "success"
                );
<<<<<<< HEAD

=======
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt silme sırasında bir problem oluştu",
                    "type"  => "error"
                );
<<<<<<< HEAD


=======
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
            }

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("galleries"));
<<<<<<< HEAD

        }
    }

    public function fileDelete($id, $parent_id, $gallery_type){


        $modelName = ($gallery_type == "image") ? "image_model" : "file_model";

        $fileName = $this->$modelName->get(
=======
        }
    }




    public function imageDelete($id, $parent_id)
    {

        $fileName = $this->product_image_model->get(
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
            array(
                "id"    => $id
            )
        );

<<<<<<< HEAD
        $delete = $this->$modelName->delete(
=======
        $delete = $this->product_image_model->delete(
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
            array(
                "id"    => $id
            )
        );

<<<<<<< HEAD
        // TODO Alert Sistemi Eklenecek...
        if($delete){
            unlink($fileName->url);
            redirect(base_url("galleries/upload_form/$parent_id"));
        } else {
            redirect(base_url("galleries/upload_form/$parent_id"));
        }

    }

    public function isActiveSetter($id){

        if($id){
=======

        // TODO Alert Sistemi Eklenecek...
        if ($delete) {

            unlink("uploads/{$this->viewFolder}/$fileName->img_url");

            redirect(base_url("product/image_form/$parent_id"));
        } else {
            redirect(base_url("product/image_form/$parent_id"));
        }
    }

    public function isActiveSetter($id)
    {

        if ($id) {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

            $isActive = ($this->input->post("data") === "true") ? 1 : 0;

            $this->gallery_model->update(
                array(
                    "id"    => $id
                ),
                array(
                    "isActive"  => $isActive
                )
            );
        }
    }

<<<<<<< HEAD

    public function fileIsActiveSetter($id, $gallery_type){

        if($id && $gallery_type){

            $modelName = ($gallery_type == "image") ? "image_model" : "file_model";

            $isActive = ($this->input->post("data") === "true") ? 1 : 0;

            $this->$modelName->update(
=======
    public function imageIsActiveSetter($id)
    {

        if ($id) {

            $isActive = ($this->input->post("data") === "true") ? 1 : 0;

            $this->product_image_model->update(
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
                array(
                    "id"    => $id
                ),
                array(
                    "isActive"  => $isActive
                )
            );
        }
    }

<<<<<<< HEAD
    public function fileRankSetter($gallery_type){
=======
    public function isCoverSetter($id, $parent_id)
    {

        if ($id && $parent_id) {

            $isCover = ($this->input->post("data") === "true") ? 1 : 0;

            // Kapak yapılmak istenen kayıt
            $this->product_image_model->update(
                array(
                    "id"         => $id,
                    "product_id" => $parent_id
                ),
                array(
                    "isCover"  => $isCover
                )
            );


            // Kapak yapılmayan diğer kayıtlar
            $this->product_image_model->update(
                array(
                    "id !="      => $id,
                    "product_id" => $parent_id
                ),
                array(
                    "isCover"  => 0
                )
            );

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "image";

            $viewData->item_images = $this->product_image_model->get_all(
                array(
                    "product_id"    => $parent_id
                ),
                "rank ASC"
            );

            $render_html = $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/render_elements/image_list_v", $viewData, true);

            echo $render_html;
        }
    }

    public function rankSetter()
    {

>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

        $data = $this->input->post("data");

        parse_str($data, $order);

        $items = $order["ord"];

<<<<<<< HEAD
        $modelName = ($gallery_type == "image") ? "image_model" : "file_model";

        foreach ($items as $rank => $id){

            $this->$modelName->update(
=======
        foreach ($items as $rank => $id) {

            $this->gallery_model->update(
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
                array(
                    "id"        => $id,
                    "rank !="   => $rank
                ),
                array(
                    "rank"      => $rank
                )
            );
<<<<<<< HEAD

        }

    }



    public function rankSetter(){
=======
        }
    }

    public function imageRankSetter()
    {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0


        $data = $this->input->post("data");

        parse_str($data, $order);

        $items = $order["ord"];

<<<<<<< HEAD
        foreach ($items as $rank => $id){

            $this->gallery_model->update(
=======
        foreach ($items as $rank => $id) {

            $this->product_image_model->update(
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
                array(
                    "id"        => $id,
                    "rank !="   => $rank
                ),
                array(
                    "rank"      => $rank
                )
            );
<<<<<<< HEAD

        }

    }

    public function upload_form($id){
=======
        }
    }

    public function upload_form($id)
    {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

        $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";

        $item = $this->gallery_model->get(
            array(
                "id"    => $id
            )
        );

        $viewData->item = $item;

<<<<<<< HEAD
        if($item->gallery_type == "image"){
=======
        if ($item->gallery_type == "image") {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

            $viewData->items = $this->image_model->get_all(
                array(
                    "gallery_id"    => $id
<<<<<<< HEAD
                ), "rank ASC"
            );

        } else if($item->gallery_type == "file"){
=======
                ),
                "rank ASC"
            );
        } else if ($item->gallery_type == "file") {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

            $viewData->items = $this->file_model->get_all(
                array(
                    "gallery_id"    => $id
<<<<<<< HEAD
                ), "rank ASC"
            );


=======
                ),
                "rank ASC"
            );

>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
        } else {

            $viewData->items = $this->video_model->get_all(
                array(
                    "gallery_id"    => $id
<<<<<<< HEAD
                ), "rank ASC"
            );

=======
                ),
                "rank ASC"
            );
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
        }

        $viewData->gallery_type = $item->gallery_type;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
<<<<<<< HEAD

    }

    public function file_upload($gallery_id, $gallery_type, $folderName){
=======
    }

    public function file_upload($gallery_id, $gallery_type, $folderName)
    {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

        $file_name = convertToSEO(pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

        $config["allowed_types"] = "jpg|jpeg|png|pdf|doc|docx";
        $config["upload_path"]   = ($gallery_type == "image") ? "uploads/$this->viewFolder/images/$folderName/" : "uploads/$this->viewFolder/files/$folderName/";
        $config["file_name"]     = $file_name;

        $this->load->library("upload", $config);

        $upload = $this->upload->do_upload("file");

<<<<<<< HEAD
        if($upload){
=======
        if ($upload) {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

            $uploaded_file = $this->upload->data("file_name");

            $modelName = ($gallery_type == "image") ? "image_model" : "file_model";

            $this->$modelName->add(
                array(
                    "url"           => "{$config["upload_path"]}$uploaded_file",
                    "rank"          => 0,
                    "isActive"      => 1,
                    "createdAt"     => date("Y-m-d H:i:s"),
                    "gallery_id"    => $gallery_id
                )
            );
<<<<<<< HEAD

        } else {
            echo "islem basarisiz";
        }

    }

    public function refresh_file_list($gallery_id, $gallery_type){
=======
        } else {
            echo "islem basarisiz";
        }
    }

    public function refresh_file_list($gallery_id, $gallery_type)
    {
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0

        $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";

        $modelName = ($gallery_type == "image") ? "image_model" : "file_model";

        $viewData->items = $this->$modelName->get_all(
            array(
                "gallery_id"    => $gallery_id
            )
        );

        $viewData->gallery_type = $gallery_type;

        $render_html = $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/render_elements/file_list_v", $viewData, true);

        echo $render_html;
<<<<<<< HEAD

    }

=======
    }
>>>>>>> 665cd63b4a95249354733052cb60d59a55bbb0b0
}
