<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body class="mx-5">
    <div class="container"> 
        <h6>1 - O número de telefone está formatado corretamente? Crie uma função que
        aceite uma string e retorne true se estiver no formato de um número de
        telefone adequado e false se não estiver. Assuma que qualquer número entre
        0 e 9 (nos locais apropriados) produzem um número de telefone válido. É
        assim que um número de telefone válido se parece: (123) 456-7890
        Exemplos:
        isValid("(123) 456-7890") ➞ true
        isValid("1111)555 2345") ➞ false
        isValid("098) 123 4567") ➞ false
        Nota: Não esqueça o espaço após os parênteses.</h6>
        <form action="ex_1.php" method="POST">
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input name="telefone" class="form-control" id="telefone" placeholder="Numero do telefone">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <h6 class="mt-5">2 - Remover os caracteres especiais de uma string Crie uma função que
        recebe uma string e remove todos os caracteres "especiais" (por
        exemplo,!@#$%^&\*) E retorne a nova string. Os únicos caracteres não
        alfanuméricos permitidos são traços -, underscore _ e espaços.
        Exemplos:
        removeCharacters("The quick green dog!") ➞ "The quick green dog"
        removeCharacters("%fd76$fd(-)6GvKlO.") ➞ "fd76fd-6GvKlO"
        removeCharacters("D0n$c sed 0di0 du1") ➞ "D0nc sed 0di0 du1"</h6>
        <form action="ex_2.php" method="POST">
            <div class="form-group">
                <label for="string">String</label>
                <input name="string" class="form-control" id="string" placeholder="String">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <h6 class="mt-5">3 - Sistema de pontuação Ana, Bruna e Caio estão jogando um jogo de
        tabuleiro. Os três decidiram criar um novo sistema de pontuação. A primeira
        inicial de um jogador ("A", "B" ou "C") indica que o jogador marcou um único
        ponto. Dada uma série de letras maiúsculas, retorne uma série de pontuações
        dos jogadores. Por exemplo, se ABBACCCCAC for escrito quando o jogo
        terminar, Ana marcou 3 pontos, Bruna marcou 2 pontos e Caio marcou 5
        pontos, pois existem 3 ocorrências da letra A, 2 ocorrências da letra B e 5
        ocorrências da letra C. Portanto, a matriz [3, 2, 5] deve ser retornada.
        Exemplos:
        calculaPontuacao("A") ➞ [1, 0, 0]
        calculaPontuacao("ABC") ➞ [1, 1, 1]
        calculaPontuacao("ABCBACC") ➞ [2, 2, 3]</h6>
        <form action="ex_3.php" method="POST">
            <div class="form-group">
                <label for="string">Pontuação</label>
                <input name="pontuacao" class="form-control" id="pontuacao" placeholder="Pontuação">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <h6 class="mt-5">4 - Dividir string por caracteres idênticos Crie uma função que divida uma
        string em um array de grupos idênticos.
        Exemplo:
        dividirGrupos("555") ➞ ["555"]
        dividirGrupos("5556667788") ➞ ["555", "666", "77", "88"]
        dividirGrupos("aaabbbaabbab") ➞ ["aaaaaa", "bbbbbb"]
        dividirGrupos("8abbbcc88999&&!!!_cab") ➞ ["888", "aa", "bbbb", "ccc",
        "999", "&&", "!!!", "_"]
        Notas: - Cada grupo deve ter o mesmo caractere. - O array retornado deve
        estar na mesma ordem que a sequência da string passada a função. - Deve
        funcionar com letras, números e outros caracteres.</h6>
        <form action="ex_4.php" method="POST">
            <div class="form-group">
                <label for="string">Sequencia</label>
                <input name="sequencia" class="form-control" id="sequencia" placeholder="Sequencia">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <h6 class="mt-5">5 - Retorne o valor de um número multiplicado por ele mesmo - 1 até chegar
        a 1
        Exemplo:
        mutiplicar(3) ➞ 6 // pois 3*2*1=6
        mutiplicar(2) ➞ 2 // pois 2*1=2
        mutiplicar(5) ➞ 120 // pois 5*4*3*2*1=120
        mutiplicar(10) ➞ 3628800 // pois 10*9*8*7*6*5*4*3*2*1=3628800</h6>
        <form action="ex_5.php" method="POST">
            <div class="form-group">
                <label for="string">Multiplicação</label>
                <input name="multiplicacao" class="form-control" id="multiplicacao" placeholder="Multiplicacao">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    
</body>
</html>
