<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div>   
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand me-auto" href="#">Unidad Educativa Especializada Manuela Espejo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mision">Misión</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#cursos">Cursos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contacto</a>
                            </li>
                            @if (Route::has('login'))
                            @auth
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                                    </li>    
                                @endif
                            @endauth
                           @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- slider-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/s1.png" class="d-block w-100  " alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/s2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/s3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
          <!-- mision y vision-->
          <hr class="container" >  
        <h1 class='text-center'> Sobre nosotros</h1>
        
        <div class="container" style="background-color: #496479; border-radius: .5rem;">
        
        <section id="mision"  >
            <div class="container">
               
                <div class="row ds-about-top-sec">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ds-about-top-sec-loop">
                <h2 class="ds-heading">Misión</h2>
                  
            </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ds-about-top-sec-loop">
                    <p>La Misión Manuela Espejo ha posibilitado que la población con discapacidad del Ecuador sea visibilizada y reconocida en sus derechos y el ejercicio pleno de su ciudadanía, representa un modelo de atención integral a esta población y un nuevo paradigma de cooperación internacional Sur-Sur. </p>
                </div>
            </div>
            
          </div>
        </section>
        <section id="vision">
            <div class="container">
               
                <div class="row ds-about-top-sec">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ds-about-top-sec-loop">
                <h2 class="ds-heading">Visión</h2>
                  
            </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ds-about-top-sec-loop">
                    <p>El objetivo principal de esta misión es el diseño técnico de políticas públicas integrales a favor de la población discapacitada ecuatoriana a través del diagnóstico integral de su realidad y la implementación de estrategias de respuestas a corto, mediano y largo plazo. </p>
                </div>
            </div>
            
          </div>
        </section>
        </div>
        <!-- cursos-->
        <hr class="container" >  
        <h1 class='text-center'> Cursos</h1>
        <div class=" container">
            <section id="cursos">
            <div class=" container card-group">
                <div class="card">
                <a href="#">    
                <img class="card-img-top" src="img/Inicial.jpeg" alt="imagen de curso"></a>
                    <div class="card-body">
                        <h5 class="card-title">Inicial</h5>
                    </div>
                </div>
                <div class="card">
                    <a href="#">    
                    <img class="card-img-top" src="img/elemental.jpg" alt="imagen de curso"></a>
                    <div class="card-body">
                        <h5 class="card-title">Elemental</h5>
                    </div>
                </div>
            </div>
            <div class=" container card-group">
                <div class="card">
                    <a href="#">    
                    <img class="card-img-top" src="img/superior.jpg" alt="imagen de curso"></a>
                    <div class="card-body">
                        <h5 class="card-title">Superior</h5>
                    </div>
                </div>
                <div class="card">
                    <a href="#">    
                    <img class="card-img-top" src="img/bachillerato.jpg" alt="imagen de curso"></a>
                    <div class="card-body">
                        <h5 class="card-title">Bachillerato</h5>
                    </div>
                </div>
            </div>
        </div>   
        </section> 
        <!-- valores-->
        <hr class="container" >  
        <h1 class='text-center'> Valores</h1>
        
        <div class="container">
            <section id="cursos">
            <div class=" container card-group">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class=" text-center card-title">Honestidad</h5>
                    </div>
                </div>
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="text-center card-title">Innovación</h5>
                    </div>
                </div>
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="text-center card-title">Comprensión</h5>
                    </div>
                </div>
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="text-center card-title">Rehabilitación</h5>
                    </div>
                </div>
            </div>
            <div class=" container card-group">
            <div class="card"> 
                    <div class="card-body">
                        <h5 class="text-center card-title">Respeto</h5>
                    </div>
                </div>
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="text-center card-title">Perseverancia</h5>
                    </div>
                </div>
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="text-center card-title">Optimismo</h5>
                    </div>
                </div>
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="text-center card-title">Responsabilidad</h5>
                    </div>
                </div>
            </div>
        </div>   
        </section> 
        <!-- contacto-->
        <hr class="container" >  
        <h1 class='text-center'> Contacto</h1>
        <!-- footer-->
        <footer class="text-center text-lg-start bg-light text-muted">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="me-5 d-none d-lg-block"></div>
            </section>
            <section class="">
                <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Acerca de nosostros
                            </h6>
                            <a href="#mision"><p >
                                Misión y Visión académica
                            </p></a>
                        </div>
                
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Recursos
                            </h6>
                            <a href="#"><p >
                                Noticias y eventos
                            </p></a>
                        </div>
                
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Contacto
                            </h6>   
                                <p >
                                    3852314
                                </p>
                                <p >
                                    Karina.proaño@gmail.com
                                </p>
                                
                        </div>
                    </div>
                </div>
        </section>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Universidad de Guayaquil:
        </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
