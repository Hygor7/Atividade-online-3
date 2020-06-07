function mascara(o, f) {
    v_obj = o;
    v_fun = f;
    setTimeout("execmascara()", 1);
}
function execmascara() {
    v_obj.value = v_fun(v_obj.value);
}
function mtel(v) {
    v = v.replace(/\D/g, "");
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
    v = v.replace(/(\d)(\d{4})$/, "$1-$2");
    return v;
}
function id(el) {
    return document.getElementById(el);
}
window.onload = function () {
    id("celular_id").onkeyup = function () {
        mascara(this, mtel);
    };
    //It maps all the IDs of the document.
    //If there is no ID error, there is an error in the javascript.
};

function uppercase(id) {
    var letra = document.getElementById(id).value;
    letra = letra.split("");
    var tmp = "";
    for (i = 0; i < letra.length; i++) {
        if (letra[i - 1]) {
            if (letra[i - 1] === " ") {
                letra[i] = letra[i].replace(letra[i], letra[i].toUpperCase());
            }
        } else {
            letra[i] = letra[i].replace(letra[i], letra[i].toUpperCase());
        }
        tmp += letra[i];
    }
    document.getElementById(id).value = tmp;
}

function IsEmail(id) {
    var field = document.getElementById(id).value;
    console.log(field);
    usuario = field.substring(0, field.indexOf("@"));
    dominio = field.substring(field.indexOf("@") + 1, field.length);

    if ((usuario.length >= 1) &&
        (dominio.length >= 3) &&
        (usuario.search("@") == -1) &&
        (dominio.search("@") == -1) &&
        (usuario.search(" ") == -1) &&
        (dominio.search(" ") == -1) &&
        (dominio.search(".") != -1) &&
        (dominio.indexOf(".") >= 1) &&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
    }
    else {
        document.getElementById(id).value = "";
    }
}


function validar_formulario_contato() {
    var nome = formulario_contato.nome.value;
    var email = formulario_contato.email.value;
    var telefone_celular = formulario_contato.telefone_celular.value;
    var assunto = formulario_contato.assunto.value;
    var mensagem = formulario_contato.mensagem.value;
    if ((nome == "") && (nome.length < 2 || nome.length > 40)) {
        alert("O campo nome é obrigatório.");
        formulario_contato.nome.focus();
        return false;
    }

    if (email == "") {
        alert("O campo (E-mail) é obrigatório.");
        formulario_contato.email.focus();
        return false;
    }
    if (telefone_celular == "") {
        alert("O campo (Telefone/Celular) é obrigatório.")
        formulario_contato.telefone_celular.focus();
        return false;
    }
    if (assunto == "") {
        alert("O campo (Assunto) é obrigatório.");
        formulario_contato.assunto.focus();
        return false;
    }
    if (mensagem == "") {
        alert("O campo (Mensagem) é obrigatório.");
        formulario_contato.mensagem.focus();
        return false;
    }
}