$(document).ready(function () {

    $(".remove-btn").click(function (e) {

        var $data_url = $(this).data("url");
        Swal.fire({
            icon: 'warning',
            title: 'Emin misiniz ?',
            text: 'Bu işlemi geri alamayacaksınız !',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, Sil!',
            cancelButtonText: 'İptal',
        }).then(function(result){
            if(result.value){
                window.location.href = $data_url;
            }
        });
    })
})