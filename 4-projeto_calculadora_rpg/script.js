function calculo(){
    let terreno = Number(document.getElementById('terreno').value)
    let atq  = Number(document.getElementById('atq').value)
    let def = Number(document.getElementById('def').value)
    let valor_dado = Math.floor(Math.random() * 25);  
    if (valor_dado < 12){
        --valor_dado 
    }
    resultado = ((atq - def)) - terreno + valor_dado
    if (resultado > 5 ){
        document.getElementById('resultado').innerHTML = "O ataque foi um sucesso!"

    }
    else if (resultado < -5){
        document.getElementById('resultado').innerHTML = "O ataque foi um fracasso."
    }
    else{
        document.getElementById('resultado').innerHTML = "Batalha inconclusiva"
    }
}
