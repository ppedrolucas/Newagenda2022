<!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Home</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-caret-square-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
          
          <a href="#" class="dropdown-item">
            <i class="fas fa-user-edit"></i></i> Editar Perfil
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Sair do sistema
          </a>
          
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Agenda JMF</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Leandro Costa</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
               <li class="nav-item">
                <a href="home.php" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Painel
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="relatorio.php" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Relatório
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="perfil.php" class="nav-link">
                  <i class="nav-icon fas fa-address-card"></i>
                  <p>
                    Perfil
                  </p>
                </a>
              </li>       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-md-5">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cadastrar contato</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nome</label>
                    <input name="nome" type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite o nome de contato...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telefone</label>
                    <input name="telefone" type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu telefone...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput move_uploaded_file(): UnEmail1">Endereço de E-mail</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o endereço de e-mail...">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Foto do contato</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="foto" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Upload da foto</label>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="btnCContato" type="submit" class="btn btn-primary">Cadastrar Contato</button>
                </div>
              </form>
              <?php 
                  include_once('config/conexao.php');
                  if(isset($_POST['btnCContato'])){
                    $nome=$_POST['nome'];
                    $telefone=$_POST['telefone'];
                    $email=$_POST['email'];
                    $formatP= array("png","jpg","jpeg","JPG","gif");//formato aceito para imagem
                    $extensao= pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION);//$extensao=extrai a extensão do nome do arquivo

                    if(in_array($extensao,$formatP)){
                      $pasta="img/";
                      //pasta que recebe a imagem de upload
                      $temporario=$_FILES['foto']['tmp_name'];
                      //Caminho temporário da imagem
                      $novoNome=uniqid().".$extensao";
                      //uniqid(criptografa o nome da imagem),depois concatena com a extensão
                      if(move_uploaded_file($temporario, $pasta.$novoNome)){
                        $cadastro="INSERT INTO tbContato(nomeContato,telefoneContato,emailContato,fotoContato) VALUES(:nome,:telefone,:email,:foto)";                   try{
                          $result=$conect-> prepare ($cadastro);
                          $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                          $result->bindParam(':telefone',$telefone,PDO::PARAM_STR);
                          $result->bindParam(':email',$email,PDO::PARAM_STR);
                          $result->bindParam(':foto',$novoNome,PDO::PARAM_STR);
                          $result->execute();
    
                          $contar=$result->rowCount();
                        if($contar > 0){
                              echo '<div class="container">
                                        <div class=" alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-check"></i> OK!</h5>
                                        Contato inserido com sucesso !!!
                                      </div>
                                    </div>';
                            }else{
                              echo '<div class="container">
                                        <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-check"></i> Ops!</h5>
                                        Contato não cadastrados !!!
                                      </div>
                                    </div>';
                            }
                        }catch (PDOException $e){
                          echo"<strong> ERRO DE CADASTRO PDO = </strong>". $e->getMessage();
                        }

                      }else{
                        echo"Erro, não foi possível fazer o upload do arquivo!"; 
                      }
                    }else{
                      echo"Formato de imagem inválido, aceito apenas(png,jpg,jpeg,JPG e gif)";
                    }

                  }
              ?>
            </div>
          </div>
          <div class="col-md-7">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ultimos contatos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th>Perfil</th>
                      <th>Nome</th>
                      <th>Telefone</th>
                      <th>E-mail</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $select="SELECT*FROM tbContato ORDER BY idcontato DESC LIMIT 8";
                  try{
                    $resultado=$conect->prepare($select);
                    $resultado->execute();
                    $contar=$resultado->rowCount();
                    if($contar>0){
                     while($show=$resultado->FETCH(PDO::FETCH_OBJ)){

                    ?>
                    <tr>
                      <td><img style=" width: 50px; heigth: 50px; aspect-radio: 1/1; border-radius: 100%;" src="img/<?php echo $show->fotoContato; ?>"></td>
                      <td>
                        <?php echo $show->nomeContato; ?>
                      </td>
                      <td>
                      <?php echo $show->telefoneContato; ?>
                      </td>
                      <td>
                      <?php echo $show->emailContato; ?>
                      </td>
                    </tr>
                    <?php
                     } 
                    }else{
                      echo"Contatos não Existentes!";
                    }
                    }catch(PDOException $e){
                    echo'<strong> ERRO DE PDO= </strong>'.$e->getMessage();
                  }
                    ?>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 - Todos os direitos reservados a</strong>
    Agenda JMF.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
                