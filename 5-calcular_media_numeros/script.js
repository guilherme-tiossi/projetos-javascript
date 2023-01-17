let nome = prompt('Nome do aluno:')
let materia = prompt('Matéria:')
let bimestre = prompt('Bimestre:')
let n1 = Number(window.prompt('Nota 1:'))
let n2 = Number(window.prompt('Nota 2:'))
let n3 = Number(window.prompt('Nota 3:'))
let media_bim = Math.ceil((n1 + n2 + n3) / 3)
if (media_bim < 5){
alert("REPROVADO! A média do aluno " + nome + " no " + bimestre + "o bimestre da matéria de " + materia + " foi " + media_bim + ", colocando-o como um aluno retido.")
}
else{
    alert("APROVADO! A média do aluno " + nome + " no " + bimestre + "o bimestre da matéria de " + materia + " foi " + media_bim + ", colocando-o como um aluno aprovado.")
}