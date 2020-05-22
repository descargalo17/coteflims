<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- icons -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CoteFlims</title>
    <link rel="shortcut icon" href="asset/img/favicon.png"/>
   
  </head>
  <body>
        <!-- barra de navegacion coteflims -->
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="index.html">
                <img src="asset/img/logo.jpg" class="d-inline-block align-top" alt="">
            </a>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="registarse.php">Registrarse</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="login.php">Iniciar sesion</a>
                    </li>
                    
                </ul>
                </div>
            </nav>




            
        </nav>


      
      <!-- empezamos la tabla para mostrar los tikets :V -->

      <?php
$link = mysqli_connect("localhost", "andresdavid111", "mariajose2011", "coteflims");


?>



      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">LISTA DE FUNCIONES COTEFLIMS</h4>
                  <p class="card-category"> por el bienestar institucional ♥ ♥ </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table">
                      <thead>
                          <tr>
                              <th class="text-center">Pelicula</th>
                              <th class="text-center">Funcion</th>
                              <th class="text-center">Descripcion</th>
                              
                              <th class="text-right">Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php
                        foreach($link->query ('SELECT * FROM peliculas') as $row){?>
 
                          <tr>
                              <td class="text-center"> <?php echo $row['pelicula']?></td>
                              <td class="text-center">  <?php echo $row['funcion']?></td>
                              <td class="text-center"> <?php echo $row['descripcion']?></td>

                              >
                              
                              <td class="td-actions text-right">


                              <a  href="#view <?php echo $row['id']?>"  data-toggle="modal" >
                                  <button type="button" rel="tooltip" class="btn btn-info">
                                      <i class="material-icons">Ver</i>
                                  </button>
                           
                              </td>
                              <div class="modal fade bd-example-modal-lg" id="view <?php echo $row['id']?>" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header card-header-icon card-header-rose">
                                              <div class="card-icon">
                                                <i class="material-icons">ver</i> <?php echo $row['id']?>
                                               
                                              </div>
                                            </div>
                                            <br>
                                            <div class="card-body">
                                            <div class="container">
                                              <div class="row">
                                              <hr class= "mi-4" >
                                              <br>
                                                <div class="col"> <i class="material-icons align-middle"aria-hidden="true"></i> <?php echo $row['id']?></div>
                                               
                                                <hr class= "mi-4" >
                                                <div class="w-100"></div>
                                                <br>
                                                
                                                <div class="col"> <i class="material-icons align-middle" aria-hidden="true" >account_box</i> <?php echo $row['pelicula']?></div>
                                                <div class="col"> <i class="material-icons align-middle" aria-hidden="true" >account_box</i> <?php echo $row['descripcion']?></div>
                                                <div class="col"><i class="material-icons align-middle"aria-hidden="true">contact_mail</i> <?php echo $row['funcion']?></div>
                                                <hr class= "mi-4" >
                                                <div class="w-100"></div>
                                                <br>
                                                
                                                
                                                
                                              </div>
                                            </div>  
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                     
                                      <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              


                          </tr>
                          
                        <?php 
                        }
                        ?>

                      </tbody>
                  </table>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    


      
    
    

    <!-- Optional JavaScript -->
    <!-- Fuentes de Iconos -->
    <script src="https://kit.fontawesome.com/be7d564f3b.js" crossorigin="anonymous"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>













