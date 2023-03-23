<!DOCTYPE html>
<html lang="pt-pt">
<head>
  <meta charset="UTF-8">
  <title>Geração de Senhas Fortes</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1>Geração de Senhas Fortes</h1>
    <div class="form">
      <label for="length">Comprimento: </label>
      <input type="number" id="length" name="length" min="8" max="32" value="8">
      <br>
      <input type="checkbox" id="uppercase" name="uppercase" checked>
      <label for="uppercase">Incluir letras maiúsculas</label>
      <br>
      <input type="checkbox" id="numbers" name="numbers" checked>
      <label for="numbers">Incluir números</label>
      <br>
      <input type="checkbox" id="symbols" name="symbols" checked>
      <label for="symbols">Incluir símbolos</label>
      <br>
      <button id="generate" onclick="generatePassword()">Gerar Senha</button>
      <br>
      <input type="text" id="password" readonly>
    </div>
  </div>
  <script src="scripts/script.js"></script>
</body>
</html>
