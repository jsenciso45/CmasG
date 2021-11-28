<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/For_in.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <title>Document</title>
</head>
<body>
 <main>
     
     <div class="contenedor__todo">
         <div class="caja__trasera">
             <div class="caja__trasera-login">
                 <h3>¿Ya tienes una cuenta?</h3>
                 <p>Inicia sesión para entrar en la página</p>
                 <button id="btn__iniciar-sesion">Iniciar Sesión</button>
             </div>
             <div class="caja__trasera-register">
                 <h3>¿Aún no tienes una cuenta?</h3>
                 <p>Regístrate para que puedas iniciar sesión</p>
                 <button id="btn__registrarse">Regístrarse</button>
             </div>
         </div>

         <!--Formulario de Login y registro-->
         <div class="contenedor__login-register">
             <!--Login-->
             <form action="" class="formulario__login" id="Form">
                 <h2>Iniciar Sesión</h2>
                 <input type="text" placeholder="Correo Electronico">
                 <input type="password" placeholder="Contraseña">
                 <button>Entrar</button>
             </form>

             <!--Register-->
             <form action="" class="formulario__register" id="Form">
                 <h2>Regístrarse</h2>
                 <!-- Nombre de usuario -->
                    <div class="formulario__grupo" id="grupo__usuario">
                        <div class="formulario__grupo-input"> 
                            <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Usuario123" required>
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>

                    <!-- Nombres de Persona -->
                    <div class="formulario__grupo" id="grupo__nombre">
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Nombre Ejemplo" required>
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>

                    <!-- Apellidos de personas-->

                    <div class="formulario__grupo" id="grupo__apellidos">
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="apellidos" id="apellidos" placeholder="Apellido ejemplo" required>
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>

                    <!-- Numero de telefono -->

                    <div class="formulario__grupo" id="grupo__telefono">
                        <div class="formulario__grupo-input">
                            <input type="number" class="formulario__input" name="telefono" id="telefono" placeholder="123456789" required>
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>
                    
                    <!-- Correo electronico -->

                    <div class="formulario__grupo" id="grupo__correo">
                        <div class="formulario__grupo-input">
                            <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correoEjemplo01@gmail.com" required>
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>

                    <!-- Contraseña de Usuario -->

                    <div class="formulario__grupo" id="grupo__password">
                        <div class="formulario__grupo-input">
                            <input type="password" class="formulario__input" name="password" placeholder="Contraseña" id="password" required>
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                    </div>

            
                    <!-- Boton de enviar -->

                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <button type="submit" class="formulario__btn">Regístrarse</button>
                    </div>
             </form>
         </div>
     </div>

 </main>

<script src="../Fn_js/formularios.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>

    
</body>
</html>