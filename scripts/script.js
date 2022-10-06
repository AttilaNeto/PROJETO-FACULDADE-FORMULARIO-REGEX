var nomeValido = false;
var emailValido = false;
var telefoneValido = false;
var mensagemValido = false;

function ValidacaoTelefone(telefone) {

    //CODIGO REGEX PARA VALIDAÇÃO DO TELEFONE 
    var noveDigitos = new RegExp(/^\(\d{2}\)\s\d{4,5}\-\d{4}/);

    var tel = document.getElementById('alerta-tel');

    //CASO O TELEFONE PASSE NO REGEX ELE COLOCA TRUE NO TELEFONE VALIDO
    if (noveDigitos.test(telefone)) {
        telefoneValido = true;     
        tel.style.display = 'none';
    } else {       
        tel.style.display = 'block';
    }
}

function ValidacaoNome(nome) {

    var texto;
    //CODIGO REGEX PARA REMOVER OS ESPAÇOS NO NOME. REMOVE OS ESPAÇOS PARA VERIFICAR SE O USUARIO NAO DIGITOU APENAS ESPAÇO NO NOME.
    texto = nome.replace(/(\s)/g,"");

    var nome = document.getElementById('alerta-nome');

    //SE O NOME TEM MAIOR QUE UMA LETRA
    if (texto.length >= 1){
        nomeValido = true;
        nome.style.display = 'none';
    }else{
        nome.style.display = 'block';
    }


};

function ValidacaoEmail(email){
    //CODIGO REGEX PARA VALIDAR EMAIL
    var re = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    var valido = re.exec(email);
    var email = document.getElementById('alerta-email');

    //SE A VALIDAÇÃO FOR TRUE, ELE MUDA A VARIAVEL DE EMAILVALIDO PARA TRUE
    if (valido){
        emailValido = true;
        email.style.display = 'none';
    }else{
        email.style.display = 'block';
    }

}

function ValidacaoMensagem(mensagem){
    console.log(mensagem)
    var texto;
    //REGEX PARA REMOVER TODOS OS ESPAÇOS E CHECAR QUANTOS CARACTERES TIRANDO O ESPAÇO NA MENSAGEM
    texto = mensagem.replace(/(\s)/g,"");
    
    var msg = document.getElementById('alerta-msg');
    if (texto.length >= 10){
        mensagemValido = true;
        msg.style.display = 'none';
    }else{
        msg.style.display = 'block';
    }
}


//FUNCAO PARA VALIDAR O FORMULARIO. CASO OS 4 CAMPOS FICAM COMO TRUE NAS VARIAVEIS, ELE CONTINUA O PROCESSO. SE ESTIVER FALTANDO ALGO, EXIBI ALERTA NA TELA
function ValidacaoFormulario(){

    if (nomeValido && emailValido && telefoneValido && mensagemValido){
        return true
    }else{

        alert('Dados Incorretos. Favor Corrigir!')

        return false

    }



}