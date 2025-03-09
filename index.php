<!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agenda JMF| Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Agenda</b>JMF</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Faça Login para cadastrar os contatos</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input  type="email" class="form-control" placeholder="Digite seu Email..." name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Digite sua senha..." name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <div class="input-group">
            <button name="btnLog" type="submit" class="btn btn-primary btn-block mb-3">Acessar Agenda</button>
          </div>

          <?php

        include_once('config/conexao.php');

        if(isset($_GET['acao'])){
          $acao = $_GET['acao'];
          if($acao=='negado'){
              echo '<div class="alert alert-danger" role="alert">
                          Erro ao acessar o sistema !
                    </div>';
          }else if($acao=='sair'){
              echo '<div class="alert alert-primary" role="alert">
                        Seção encerrada, volte sempre c:
                    </div>';
          }
      }
        if(isset($_POST['btnLog'])){
            
            $login=$_POST['email'];
            $pass=$_POST['pass'];

            $select="SELECT * FROM tbusers WHERE emailUser=:email AND senhaUser=:pass";
            try {
              $resultLogin = $conect->prepare($select);
              
              $resultLogin->bindParam(':email',$login, PDO::PARAM_STR);
              $resultLogin->bindParam(':pass',$pass, PDO::PARAM_STR);
              $resultLogin->execute();
  
              $verificar = $resultLogin->rowCount();
              if ($verificar>0) {
                
                $login=$_POST['email'];
                $pass=$_POST['pass'];
                //CRIAR SESSAO »»
               
                $_SESSION['email'] = $login;
                $_SESSION['pass'] = $pass;
  
                echo '<div class="alert alert-success" role="alert">
                            Bem-vindo ao seu sistema de estoque :)
                        </div>';
              
                header("Refresh: 1, home.php?acao=welcome");
              }else{
                echo '<div class="alert alert-danger" role="alert">
                            Usuário inválido
                        </div>';
              }
            } catch(PDOException $e){
              echo "<strong>ERRO DE LOGIN = </strong>".$e->getMessage();
            }
          }

        ?>
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
     
      <p stle="margin:20px 50px 0 0 ;text-align center"class="mb-0">
        <a href="registro.php" class="text-center">Cadastro para novo usuário</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
