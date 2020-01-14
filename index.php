<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="resources/softLogo.png" type="image/x-icon">
  <title>Login</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Sistema Visitas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Iniciar Sesión</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Registro</a>
  </div>
</nav>

    
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <h1>Inicio de sesión</h1>
  <div id="content">
    <div>
      <div>
      
             
             <div id="form">
             <form action="" id="formLgS">
         
                     <label for="emailS">Correo: </label>
                     <br>
                     <input type="email" name="emailS" required="true" >
                     <br>
                     <br>
                     <label for="passwordS">Contraseña: </label>
                     <br>
                     <br>
                     <input type="password" name="passwordS" pattern="[A-Za-z0-9_-]{1,15}" required="true">
                     <br>
                     <br>
                     <button type="submit"  class="botonlgS">Entrar</button>
                 
                    
                 </form>
                 </div>
      </div>
    </div>
               
</div>



  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">



  <h1>Registro</h1>
  <div id="content">
    <div>
      <div>
      
             
             <div id="form">
             <form action="RegSea.php" method="post" id="formLg">
         
                     <label for="Nombre">Correo: </label>
                     <br>
                     <input type="email" name="email" required="true" >
                     <br>
                     <br>
                     <label for="AP">Contraseña: </label>
                     <br>
                     <br>
                     <input type="password" name="password"  required="true">
                     <br>
                     <br>
        <input type="submit" class="botonlg" value="Registrar" name="btnRegistro">
       </form>


  </div>
</div>
             
               <script src="css/js/JQuery-3-4-1.min.js"></script>
               <script src="css/js/bootstrap.min.js"></script>
               <script src="js/prueba.js"></script>
  
</body>
</html>
