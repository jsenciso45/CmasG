<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links de estilos -->
    <link rel="stylesheet" href="estilos/Menu_res.css">
    <link rel="stylesheet" href="estilos/normalize.css">
    <link rel="stylesheet" href="estilos/cajas.css">
    <title>Document</title>
</head>
<body>
<!-- Menu de navegacion -->
<div class="Mn_nav">
    <nav class="menu">
        <label for="" class="logo"><h1 class="heading">Comercio<span>Mas</span><span>G</span></h1></label>
        <ul class="menu_items">
            <li><a href="#">Recomendado</a></li>
            <li><a href="Vistas/Fr_Inicio.php">Crea Tu Cuenta</a></li>
            <li><a href="#">Iniciar Sesion</a></li>
            <li><a href="#">Contactos</a></li>
        </ul>
        <span class="btn_menu">
            <i class="fa fa-bars"></i>
        </span>
    </nav>
</div>

<!-- Galeria slider publicidad -->

<!-- fin slider -->



<!-- Tarjetas de publicidad -->
<div class="caja-uno">
<section class="card">
    <div class="card__perfil">
        <div class="card__nombre">
            <img src="imagenes/negocio-up.png" alt="">
            <h2>Beneficie su Negocio</h2>
        </div>
        <hr>
        <div class="card__descripcion">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolores perferendis rem ipsam
                veniam reiciendis eveniet optio eum velit, dignissimos asperiores fugit molestias ipsum temporibus
                rerum hic iste nulla vitae?</p>
        </div>
        <hr>
        <div class="card__button">
            <a class="enlace" href="#">Saber más</a>
        </div>
    </div>
    <div class="card__perfil">
        <div class="card__nombre">
            <img src="https://www.markuptag.com/images/user-img-2.jpg" alt="">
            <h2>Satyam Tiwari</h2>
            <p>Desarrollador web</p>
        </div>
        <hr>
        <div class="card__descripcion">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolores perferendis rem ipsam
                veniam reiciendis eveniet optio eum velit, dignissimos asperiores fugit molestias ipsum temporibus
                rerum hic iste nulla vitae?</p>
        </div>
        <hr>
        <div class="card__button">
            <a class="enlace" href="#">Saber más</a>
        </div>
    </div>
    <div class="card__perfil">
        <div class="card__nombre">
            <img src="https://www.markuptag.com/images/user-img-3.jpg" alt="">
            <h2>Salim Malik</h2>
            <p>Desarrollador front-end</p>
        </div>
        <hr>
        <div class="card__descripcion">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolores perferendis rem ipsam
                veniam reiciendis eveniet optio eum velit, dignissimos asperiores fugit molestias ipsum temporibus
                rerum hic iste nulla vitae?</p>
        </div>
        <hr>
        <div class="card__button">
            <a class="enlace" href="#">Saber más</a>
        </div>
    </div>
</section>
</div>
    

<!-- Barra de busqueda de comercios -->
<div class="Mn_nav">
    <nav class="menu menu_bus">
        <label for="" class="logo logo_bus">ComercioMas</label>
        <ul class="menu_items">
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Favoritos</a></li>
        </ul>
        <div class="buscar">
            <input type="search" placeholder="Buscar">
            <div class="btn"><i class="fas fa fa-search"></i></div>
        </div>
        <span class="btn_menu">
            <i class="fa fa-bars"></i>
        </span>
    </nav>
</div>

<!-- Mostrar Negocios -->
</body>
<!-- Links de funcion javaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
<script src="Fn_js/menu.js"></script>
<script src="Fn_js/Galeria.js"></script>
</html>