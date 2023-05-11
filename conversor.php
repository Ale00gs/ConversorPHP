<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="GET" action="logica/processamentoConversor.php">
           <label>Digite um valor: </label>
           <input type="text" name="num1" placeholder="Digite um valor">
           <select name="selectConverter">
                <option value="centimetrosParaMetros">Centímetros (cm) para Metros (m)</option>
                <option value="metrosParaCentimetros">Metros (m) para Centímetros (cm)</option>
                <option value="quilometrosParaMetros">Quilômetros (km) para Metros (m)</option>
                <option value="metrosParaQuilometros">Metros (m) para Quilômetros (km)</option>
           </select>
           <input type="submit" id="botao" value="CALCULAR">
        </form>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2023 - Todos os direitos reservados</p>
    </footer>
</body>
</html>