(function ($) {
    $(function () {
        
        var MascaraUtilizada = function (val) {
            //VERIFICA QUAL MASCARA VAI  SER UTILIZADA
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
            telOptions = {
                //QUANDO PRECIONAR UMA TECLA NO INPUT ELE CHAMA A FUNÇÃO JQUERY NO PLUGIN QUE COLOCA A MASCARA
                onKeyPress: function (val, e, field, options) {
                    field.mask(MascaraUtilizada.apply({}, arguments), options);
                }
            };

        $('.telefone').mask(MascaraUtilizada, telOptions);
    });
})(jQuery);