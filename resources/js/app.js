require('./bootstrap');

$(document).ready(function() {
    $('.solonumeros').on('input', function () {
        this.value = this.value.replace(/[^0-9.]/g, '');
    });

    $('.telefono').on('keypress paste', function (event) {
        this.value = this.value.replace(/[^0-9.]/g, '');
        var valor=$(this).val();
        if(valor.length>=10){
            event.preventDefault();
            return false;
        }
    });

    $(".mayuscula").on('keyup', function (e) {
        $(this).val($(this).val().toUpperCase());
    });
});
