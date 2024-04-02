<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_dashboard.css">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <!--Barra de navegacion-->
        <?php
    session_start(); 
    ?>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg">

                    <img class="navbar-brand" src="img/logo.png" alt="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="dashboard.php"><i
                                        class="fa-solid fa-house fa-xl"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../error404.html"><i class="fa-solid fa-bell fa-xl"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../ingreso.php"><i class="fa-solid fa-door-open fa-xl"></i></a>
                                <li class="nav-item"><a class="nav-link" href="incidencias.php"><i class="fa-solid fa-circle-exclamation"></i>Registrar incidencia </a></li>
                            </li>

                        </ul>
                    </div>

                </nav>
            </div>
        </div>

        <!--Menu de funcionalidades-->
        <div class="row">
            <div class="col-md-3 menu">
                <!--img del perfil-->
                <div class="row perfiles">
                    <img src="img/delivery.png" class="xd" alt="iconempleado">
                    <h4>Hola <?php echo $_SESSION['user']; ?></h4>
                    <p><?php echo $_SESSION['tipo']; ?></p>
                    <button class="btn btn-outline-light col-4" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Ver perfil</button>
                </div>
                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="img/delivery.png" alt="user">
                                <h1 class="modal-title col align-items-center " id="exampleModalLabel"><?php echo $_SESSION['user']; ?></h1>
                                <h4>Rol: <?php echo $_SESSION['tipo']; ?></h4>
                            </div>
                            <div class="modal-body">
                            <p>Correo: <?php echo $_SESSION['email']; ?></p>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-secondary"><a href="edit_perfil.php" class="nav-link">Modificar perfil</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--menu de funcionalidades-->
                <h3>Domicilios</h3>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="entregas.php"><i class="fa-solid fa-box-open"></i>Ver entregas </a></li>
                </ul>

             
            </div>
            <!--Campo de datos-->
            <div class="col-md-9 martop table-responsive-sm">
                <div class="row pro">
                    <div class="col-md-12 tableposi">
                        <h2>Historial de entregas</h2>
                        <table class=" table table-hover ">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Tipo entrega</th>
                                    <th scope="col">Aceptar entrega</th>
                                    <th scope="col">Rechazar entrega</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Calle 100 #83-99</td>
                                    <td>Bryan Bustamante</td>
                                    <td>Express</td>
                                    <td>
                                        <button type="button" onclick="Aceptar()" class="btn kawa btn-outline-success"><i class="fa-solid fa-check fa-lg"></i></button>
                                    </td>
                                    <td>
                                        <button type="button" onclick="Rechazar()" class="btn kawa btn-outline-danger"><i class="fa-solid fa-xmark fa-lg"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Calle 10 #10-4</td>
                                    <td>Luis Tovar</td>
                                    <td>Corriente</td>
                                    <td>
                                        <button type="button" onclick="Aceptar()" class="btn kawa btn-outline-success"><i class="fa-solid fa-check fa-lg"></i></button>
                                    </td>
                                    <td>
                                        <button type="button" onclick="Rechazar()" class="btn kawa btn-outline-danger"><i class="fa-solid fa-xmark fa-lg"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Calle 44 #444-444</td>
                                    <td>Jhin sublime</td>
                                    <td>Express</td>
                                    <td>
                                        <button type="button" onclick="Aceptar()" class="btn kawa btn-outline-success"><i class="fa-solid fa-check fa-lg"></i></button>
                                    </td>
                                    <td>
                                        <button type="button" onclick="Rechazar()" class="btn kawa btn-outline-danger"><i class="fa-solid fa-xmark fa-lg"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Calle 1 #98-69</td>
                                    <td>Sebastian galindo</td>
                                    <td>Express</td>
                                    <td>
                                        <button type="button" onclick="Aceptar()" class="btn kawa btn-outline-success"><i class="fa-solid fa-check fa-lg"></i></button>
                                    </td>
                                    <td>
                                        <button type="button" onclick="Rechazar()" class="btn kawa btn-outline-danger"><i class="fa-solid fa-xmark fa-lg"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Calle 8 #97-63</td>
                                    <td>Mafe Chacon</td>
                                    <td>Corriente</td>
                                    <td>
                                        <button type="button" onclick="Aceptar()" class="btn kawa btn-outline-success"><i class="fa-solid fa-check fa-lg"></i></button>
                                    </td>
                                    <td>
                                        <button type="button" onclick="Rechazar()" class="btn kawa btn-outline-danger"><i class="fa-solid fa-xmark fa-lg"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
               <!-- pie de pagina -->
    <footer> 
        <img id="logofooter" src="img/logo.png" alt="">
        <div class="contengotodo">
            <div class="img">
                <img src="img/contacto.png" alt="contactoicon">
                <h2>Escribenos</h2>
               </div>
               <div class="texto">
                <p>
                    bustamanteparrabryanalexander@gmail.com
                </p>
                <p>
                    luisandrestovarr2019@gmail.com
                </p>
                <p>
                    hoonluv4@gmail.com
                </p>
                <p>
                    sebastiangalindo@gmail.com
                </p>
               </div>         
        </div>
   <div class="contengotodo">
    <div class="img">
        <img src="img/llamada.png" alt="">
        <h2>LLamanos</h2>
    </div>
    <div class="texto">
        <p>3015823912</p>
        <p>313 4177450</p>
        <p>315 2594007</p>
        <p>317 5158394</p>
    </div>
   </div>
       
    </footer>
            </div>
           
                
            
       
    </div>
    <script>
        function Aceptar(){
            Swal.fire({
  position: "center",
  icon: "success",
  title: "Entrega aceptada",
  showConfirmButton: false,
  timer: 1500
});
        }
        function Rechazar(){
            Swal.fire({
  title: "Porque rechazas la entrega?",
  input: "text",
  inputAttributes: {
    autocapitalize: "off"
  },
  showCancelButton: true,
  confirmButtonText: "Enviar",
  showLoaderOnConfirm: true,
  preConfirm: async (login) => {
   
  },
  allowOutsideClick: () => !Swal.isLoading()
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: `Entrega rechazada`,
      icon: "error"
    });
  }
});
        }
       
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    
</body>

</html>
