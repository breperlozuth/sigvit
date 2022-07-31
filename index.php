<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Inicio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index/main.css">
  <link rel="stylesheet" href="index/back.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="home" style="margin: 0px;">
  <div id="main">
    <header>
      <span class="fix-overlay"></span>
      <div class="container">
        <a class="logo animated zoomIn" href="#">
          <img class="mostrar" src="assets/img/logo.png" width="351px" height="120px">
          <img class="ocultar" src="assets/img/logo.png" width="90px" height="55px">
        </a>
        <div class="h-main animated fadeInDown">
          <div class="h-blockUp">
            <ul class="options">
              <li class="dir"> (248) 182·3447 / (248) 345·6789</li>
              <li class="dir">  Camino, Real San Mateo S/N, 74169 Santa Ana Xalmimilulco, Pue.</li>            
            <ul>
          </div>
        </div>
        <div class="h-blockDown">
          <nav class="menu">
            <ul>
              <li><a href="login.php" target="">Iniciar sesión</a></li> 
            </ul>           
          </nav>
        </div>
      </div>
    </header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/img1.jpg" class="d-block w-100" height="600px">
        </div>
        <div class="carousel-item">
          <img src="assets/img/img2.jpg" class="d-block w-100" height="600px">
        </div>
        <div class="carousel-item">
          <img src="assets/img/img2.png" class="d-block w-100" height="600px">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
      </button>
    </div>
  </div>
  <main class="content-home">
    
    <!-- 3 CARDS -->
      <section class="box-options animated fadeInUp">
        <div class="box-01">
          <div class="texto-box"><span class="icono"><img src="assets/img/medico.png"></span>
            <div class="content-box"><strong>Consulta tu médico</strong>
              <p>Acuda a su consultorio más cercano</p>
            </div>
          </div> 
        </div>
        <div class="box-01">
          <div class="texto-box"><span class="icono"><img src="assets/img/signosv.png"></span>
            <div class="content-box"><strong>Revise tus signos vitales</strong>
                <p>Revise sus niveles de oxigenación, ritmo cardiaco, calorias, etc.</p>
            </div>
          </div>
        </div>
        <div class="box-01">
          <div class="texto-box"><span class="icono"><img src="assets/img/consignos.png"></span>
            <div class="content-box"><strong>Monitorea tus signos vitales </strong>
              <p>Mantenga un historial con sus datos para una evaluación médica mejor</p>
            </div>
          </div>
        </div>
      </section>
    <!-- 3 CARDS FIN-->
    <!-- Espacio intermedio -->
    <section class="testimonios-home">
      <div class="av-container av-visible">
        <div class="container aniview animated fadeInLeft" data-av-animation="fadeInLeft" style="opacity: 1;">
          <h1> <strong>Mantén un corazón sano practicando ejercicio todos los días</strong></h1>
        </div>
      </div>
    </section>
    <!-- Espacio intermedio FIN-->
    <!-- Foto grande-->
    <section class="content-programa-salud-home" style="background-image: url(assets/img/seccion2.jpg);">
      <div class="av-container av-visible">
        <div class="contenido aniview animated fadeInRight" data-av-animation="fadeInRight" style="opacity: 1;">
        <h2><strong>Buen trato con el cliente</strong></h2>
          <p class="subtitle">Protegerte, el primer paso para cuidarte</p>
          <p></p><p>Conoce PlanSalud y recibe la mejor cobertura en atenciones médicas, emergencias, hospitalización y los diversos servicios que te ofrecemos</p><p></p>
        </div>
      </div>
      <div class="contenido-img-movil">
        <img src="./a_files/PlanSalud-comienza-a-prevenir-desde-hoy-movil2.jpg" alt="" width="" height="">
      </div>
    </section>
    <!-- Foto Grande FIN-->
    <!-- Servicios -->
    <div class="text-center p-3">
      <h2 style="color: #00B2A9;">Nuestros servicios</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">

      <div class="col">
        <div class="card">
          <img src="assets/img/sec1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="text-center">
              <h2 style="color: #00B2A9; font-size: x-large;">Ingresa en línea</h2>
            </div>
            <div class="text-center">
              <p class="card-text">Consulta sus datos en línea</p>
            </div> 
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="assets/img/sec2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="text-center">
              <h2 style="color: #00B2A9; font-size: x-large;">Consulta por móvil</h2>
            </div>
            <div class="text-center">
              <p class="card-text">Consulta sus datos en tu aplicación móvil</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="assets/img/sec3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="text-center">
              <h2 style="color: #00B2A9; font-size: x-large;">Usar tu smartwatch</h2>
            </div>
            <div class="text-center">
              <p class="card-text">Ahora con tu smartwatch podrás registrar tus calorías quemadas</p>
            </div>
          </div>
        </div>
      </div> 
    </div>
    <!-- Servicios FIN -->
  </main>

  <!-- Footer -->
  <footer class="text-center text-lg-start">
    <div class="text-center p-3" style="background-color: rgba(0, 178, 169, 0.937);">
        © 2022 Sistemas para el monitoreo de signos vitales   
    </div>
  </footer>
  <!-- Footer FIN-->
    
</body>
</html>