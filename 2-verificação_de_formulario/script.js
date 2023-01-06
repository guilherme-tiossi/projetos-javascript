function verificar(){
    let validar = true;
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;
    const senha2 = document.getElementById('senha2').value;
    
    if (nome.length < 3){
        document.getElementById('aviso-nome').className = "alerta";
        validar = false;
    }
    
    if (email.indexOf('@') == -1){
        document.getElementById('aviso-email').className = "alerta";
        validar = false;
    }

    if (senha.indexOf('!', '@', '#', '$', '%', '&', '*', '(', ')') == -1 | senha.length < 6){
        document.getElementById('aviso-senha').className = "alerta";
        validar = false;
    }

    if (senha2 != senha){
        document.getElementById('aviso-senha2').className = "alerta";
        validar = false;
    }
    
    return validar;
}