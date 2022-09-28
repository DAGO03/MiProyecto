<?php
session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];
if($varsesion== 2){
    header("location:../formulario.php");
    die();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="formulario.php">
    <title>Pagina web basica</title>

</head>
<body>
    <div class="head">

        <div class="logo">
            <a class="logo a" href="#"><img src="img/logo.png" alt="" width="50px" height="60px"></a>
        </div>

        
            
            <div class="navbar">
<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="house"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                <path fill-rule="evenodd"
                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
            </svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="basket"
                viewBox="0 0 16 16">
                <path
                    d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z" />
                <path
                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z" />
            </svg></a>
            <a href="mostrar.php"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="person"
                viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg></a>
        </div>
        </nav>

    </div>

    <header class="content header">
        <h2 class="title">Inicio</h2>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
             Ipsam necessitatibus odio quisquam reprehenderit quas, 
             obcaecati, harum hic molestiae sequi ipsa nihil id tempore explicabo 
            libero vero quia asperiores similique dicta.
        </p>

        
    </header>

    <section class="content sau">

        <h2 class="title">Productos</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing 
            elit. Veritatis excepturi dolore, harum asperiores 
            cupiditate officiis quia odit reiciendis quidem iure 
            architecto laudantium 
            nihil saepe pariatur vel labore molestias consectetur veniam?</p>
        
        <div class="box-container">

            <div class="box">
                <i class="fab fa-angular"></i>
                <h3>Misión</h3>
                <p>Nuestra misión como empresa es dar a conocer mucho más el tipo de consolas retro y así ser más asequible para cualquier tipo de persona.</p>
            </div>
            <div class="box">
                <i class="fab fa-apple"></i>
                <h3>Visión</h3>
                <p>Ser una empresa líder en el mundo gamer, centrando nuestros esfuerzos en la innovación y en la excelencia, tanto en la calidad del servicio como en la atención al cliente. Ofrecer diversión, emoción y sensaciones con la mejor y más variada oferta de juego</p>
            </div>
            <div class="box">
                <i class="fab fa-android"></i>
                <h3>Meta</h3>
                <p>...</p>
            </div>

        </div>

    </section>

    <section class="content about">

        <h2 class="title">Nosotros</h2>
        <p>Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Ut soluta similique 
            quia reprehenderit eligendi aliquam. Sit 
            odio impedit quibusdam. Velit corporis, 
            optio debitis quidem ex ipsam rerum dolorem autem sequi.
        </p>

        <a href="#" class="btn">Saber mas</a>

    </section>

    <section class="content price">

        <article class="contain">
            <h2 class="title">Precio</h2>
            <p>Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Ut soluta similique 
                quia reprehenderit eligendi aliquam. Sit 
                odio impedit quibusdam. Velit corporis, 
                optio debitis quidem ex ipsam rerum dolorem autem sequi.
            </p>

            <a href="#" class="btn">Saber precio</a>

        </article>

    </section>

    <section class="content contact">
        <h2 class="title2">REDES</h2>
        <i class="insta"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"  class="insta"
            viewBox="0 0 16 16">
            <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </svg></i>
     
        
    </section>
    <a class="nav-link" href="cerrar_sesion.php">
        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
     cerrar sesion
    </a>
    
</body>
</html>