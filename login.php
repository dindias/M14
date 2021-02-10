<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/Style.css"/>
        <link rel="stylesheet" href="css/login.css"/>
        <link href="http://pheist.net/fonts.php?id=51" rel="stylesheet">
        <link rel="shortcut icon" href="Visuals/zaibatsu.ico" />
        <title>TekkenWeb</title>
      
        <div class="hed">
          
            <a href="Index.html"> <img src="Visuals/ADII.png" class="logo" style="width: 200"> </a>
            <ul>
                <li><a href="acerca.php">Acerca de ADII</a></li>
                <li><a><input type="text" placeholder="Introducir codigo" id="nuevoTexto"></a></li>
                <li><a href="registro.php">Registro</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
          
        </div>
       
    </head>

    <body class="body"> 
    
    <?php 
    echo "Pagina de login";
    ?>
        <div class="bod">
             
             <section class="login">
                 <div id="ContenedorLogin">
                 <h1 class="cuadrotitulo">Iniciar Sesion</h1>
                     <input class="inputText" type="text" placeholder=" Introduce tu Usuario">
                     <input class="inputPassword" type="password" placeholder=" Introduce una contraseña">
                     <div class="Boton">
                     <button class="botonIniciarSesion">Iniciar Sesion</button>
                     </div>
                 </div>
             </section>
    
             <br>
             <br>
             <br>
        
 
       
         <footer>
             <div class="fut"></div>  
         </footer>

</body>
</html>