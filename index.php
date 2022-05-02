<?php 
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
      echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
      echo "Preencha sua senha";
    } else {
      $email = $mysqli->real_escape_string($_POST['email']);
      $senha = $mysqli->real_escape_string($_POST['senha']);

      $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

      $quantidade = $sql_query->num_rows;

      if($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
          session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: dashboard.php");
      } else {  
        echo "Falha ao logar! E-mail e/ou senha incorretos";
      }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Login</title>
</head>
<body>
  <section class="area-logo">
    <div>
      <img src="./assets/img/logo-white.png" alt="Logo Leaf">
    </div>
  </section>
  <section class="area-login">
    <div class="login">
      <div>
        <h1>Faça seu login</h1>
      </div>

      <form action="" method="post">
        <input type="email" name="email" placeholder="E-mail ou usuário" autofocus class="email">
        <input type="password" name="senha" placeholder="Senha" >
        <a href="#" class="esqueci-senha" >Esqueci a senha</a>
        <input type="submit" value="Entrar" />        
      </form>

      
      <a href="#">Quero me cadastrar</a>
    </div>
  </section>
</body>
</html>