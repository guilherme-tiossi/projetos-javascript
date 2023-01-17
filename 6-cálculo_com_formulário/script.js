//    let verificar se é numero = /^\d+$/.test(num1, num2)

function teste(){
    let num1 = Number(document.getElementById('num1').value)
    let num2 = Number(document.getElementById('num2').value)
    var calculo = document.getElementById('calculo').options[document.getElementById('calculo').selectedIndex].text;
    
    if (calculo == 'adição'){
        resultado = num1 + num2
    }

    else if (calculo == 'subtração'){
        resultado = num1 - num2
    }

    else if (calculo == 'multiplicação'){
        resultado = num1 * num2
    }

    else if (calculo == 'divisão'){
        resultado = num1 / num2
    }
    document.getElementById('resultado').innerHTML = resultado
}